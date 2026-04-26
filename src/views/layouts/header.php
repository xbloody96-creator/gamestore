<!DOCTYPE html>
<html lang="ru" data-theme="light" data-accessibility="normal">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'GameStore' ?> - <?= ($GLOBALS['siteName'] ?? 'GameStore') ?></title>
    <link rel="stylesheet" href="/gamestore-main/public/assets/css/main.css">
    <link rel="icon" type="image/png" href="/gamestore-main/public/assets/images/favicon.png">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-top">
                <a href="/gamestore-main/public/" class="logo">
                    <img src="/gamestore-main/public/assets/images/placeholder-avatar.png" alt="GameStore Logo">
                    <span><?= ($GLOBALS['siteName'] ?? 'GameStore') ?></span>
                </a>
                
                <nav>
                    <ul class="nav-menu">
                        <li><a href="/gamestore-main/public/register.php">Регистрация</a></li>
                        <li><a href="/gamestore-main/public/login.php">Авторизация</a></li>
                        <li><a href="/gamestore-main/public/profile.php">Личный кабинет</a></li>
                        <li><a href="/gamestore-main/public/#about">О нас</a></li>
                        <li><a href="/gamestore-main/public/#promotions">Акции</a></li>
                        <li><a href="/gamestore-main/public/#search">Поиск</a></li>
                        <li><a href="/gamestore-main/public/#contacts">Контакты</a></li>
                    </ul>
                </nav>
                
                <div class="header-controls">
                    <div class="search-bar">
                        <input type="text" class="search-input" placeholder="Поиск товаров...">
                        <button class="btn btn-primary">🔍</button>
                    </div>
                    
                    <button class="theme-toggle" title="Переключить тему">🌙</button>
                    <button class="accessibility-toggle" title="Режим для слабовидящих">🔍</button>
                    
                    <a href="/gamestore-main/public/cart.php" class="btn btn-secondary" style="position: relative;">
                        🛒 Корзина
                        <span class="cart-count" style="position: absolute; top: -8px; right: -8px; background: var(--primary-color); color: white; border-radius: 50%; width: 20px; height: 20px; font-size: 12px; display: flex; align-items: center; justify-content: center;">0</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    
    <main>
