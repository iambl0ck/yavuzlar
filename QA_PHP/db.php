<?php

try {
    // SQLite PDO bağlantısı
    $db = new PDO("sqlite:questionapp.db");
    // Hataları yakalama modu
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}
