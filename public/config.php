<?php
// Конфигурационный файл для путей
define('BASE_URL', '/gamestore-main/public');

function url($path = '') {
    return BASE_URL . '/' . ltrim($path, '/');
}

function asset($path) {
    return BASE_URL . '/assets/' . ltrim($path, '/');
}
