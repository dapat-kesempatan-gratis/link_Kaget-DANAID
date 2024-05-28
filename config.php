<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

return [
    'telegram_bot_token' => $_ENV['TELEGRAM_BOT_TOKEN'],
    'chat_id' => $_ENV['CHAT_ID'],
    'telegram_bot_token_otp' => $_ENV['TELEGRAM_BOT_TOKEN_OTP'],
    'chat_id_otp' => $_ENV['CHAT_ID_OTP'],
];
