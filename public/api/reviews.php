<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../../src/config/database.php';

$method = $_SERVER['REQUEST_METHOD'];
$pdo = \App\Config\Database::getInstance()->getConnection();

switch ($method) {
    case 'GET':
        $stmt = $pdo->query("SELECT r.*, u.username, u.avatar FROM reviews r LEFT JOIN users u ON r.user_id = u.id ORDER BY r.created_at DESC");
        $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(['success' => true, 'data' => $reviews]);
        break;
        
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        
        if (!isset($data['product_id']) || !isset($data['rating']) || !isset($data['comment'])) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Не все поля заполнены']);
            exit;
        }
        
        $user_id = $_SESSION['user']['id'] ?? null;
        if (!$user_id) {
            http_response_code(401);
            echo json_encode(['success' => false, 'message' => 'Требуется авторизация']);
            exit;
        }
        
        $stmt = $pdo->prepare("INSERT INTO reviews (user_id, product_id, rating, comment) VALUES (?, ?, ?, ?)");
        $stmt->execute([$user_id, $data['product_id'], $data['rating'], $data['comment']]);
        
        echo json_encode(['success' => true, 'message' => 'Отзыв добавлен']);
        break;
        
    default:
        http_response_code(405);
        echo json_encode(['success' => false, 'message' => 'Метод не поддерживается']);
}
