<?php
// Veritabanı dosyasına bağlanma
$dsn = 'sqlite:/questionapp.db';

try {
    // SQLite PDO bağlantısı
    $db = new PDO($dsn);
    // Hataları yakalama modu
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}
