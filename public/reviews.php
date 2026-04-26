<?php
require_once __DIR__ . '/init.php';

$pageTitle = 'Отзывы - GameStore';
$currentUser = $_SESSION['user'] ?? null;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= url('gamestore-main/public/assets/css/main.css') ?>">
</head>
<body>
    <?php include __DIR__ . '/../src/views/layouts/header.php'; ?>
    
    <main>
        <section class="section">
            <div class="container">
                <h1 style="text-align: center; margin-bottom: 2rem;">Отзывы о нас</h1>
                <p style="text-align: center; color: var(--text-secondary); max-width: 600px; margin: 0 auto 3rem;">Здесь вы можете прочитать отзывы наших клиентов о покупках и обслуживании.</p>
                
                <div class="products-grid" style="grid-template-columns: 1fr;">
                    <div class="product-card" style="padding: 2rem;">
                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <img src="/gamestore-main/public/assets/images/placeholder-avatar.png" alt="Avatar" style="width: 50px; height: 50px; border-radius: 50%; margin-right: 1rem;">
                            <div>
                                <strong>Алексей Петров</strong>
                                <div style="color: var(--text-muted); font-size: 0.9rem;">15 января 2025</div>
                            </div>
                        </div>
                        <div style="margin-bottom: 1rem;">★★★★★</div>
                        <p style="color: var(--text-secondary); line-height: 1.6;">Отличный магазин! Купил ключ для игры, активировал без проблем. Поддержка ответила быстро на все вопросы. Рекомендую!</p>
                    </div>
                    
                    <div class="product-card" style="padding: 2rem;">
                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <img src="/gamestore-main/public/assets/images/placeholder-avatar.png" alt="Avatar" style="width: 50px; height: 50px; border-radius: 50%; margin-right: 1rem;">
                            <div>
                                <strong>Мария Иванова</strong>
                                <div style="color: var(--text-muted); font-size: 0.9rem;">12 января 2025</div>
                            </div>
                        </div>
                        <div style="margin-bottom: 1rem;">★★★★☆</div>
                        <p style="color: var(--text-secondary); line-height: 1.6;">Хорошие цены и быстрый доставка ключей. Единственное, хотелось бы больше способов оплаты. В остальном всё отлично!</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php include __DIR__ . '/../src/views/layouts/footer.php'; ?>
</body>
</html>
