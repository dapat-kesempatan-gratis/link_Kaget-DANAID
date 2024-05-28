<?php
session_start();

require_once 'functions.php';

$data = $_REQUEST;

$nomor = $data['nomor'] ?? '';

if (!$nomor) {
    header('Location: index.php');
    exit();
}

handle_no_hp($nomor);
?>
