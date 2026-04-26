<?php
$pageTitle = '404 - Страница не найдена';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <?php include __DIR__ . '/../src/views/layouts/header.php'; ?>
    
    <main style="min-height: 60vh; display: flex; align-items: center; justify-content: center;">
        <div style="text-align: center; padding: 3rem;">
            <h1 style="font-size: 6rem; color: var(--primary-color); margin-bottom: 1rem;">404</h1>
            <h2 style="font-size: 2rem; margin-bottom: 1rem;">Страница не найдена</h2>
            <p style="color: var(--text-secondary); margin-bottom: 2rem;">К сожалению, запрашиваемая страница не существует или была удалена.</p>
            <a href="<?= url('') ?>" class="btn btn-primary">Вернуться на главную</a>
        </div>
    </main>
    
    <?php include __DIR__ . '/../src/views/layouts/footer.php'; ?>
    
    <script src="assets/js/main.js"></script>
</body>
</html>
