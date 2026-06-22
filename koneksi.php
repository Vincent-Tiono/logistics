<?php
require_once __DIR__ . '/config/database.php';

try {
    $koneksi = db_connect('databasemlp');
} catch (RuntimeException $exception) {
    http_response_code(500);
    die(htmlspecialchars($exception->getMessage(), ENT_QUOTES, 'UTF-8'));
}
