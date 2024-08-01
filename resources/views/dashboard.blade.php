<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Koin App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/dashboard.css">

    <style>
        .btn-jun1 {
            background-color: rgba(220, 53, 69, 1);
            color: white;
        }
        .btn-jun {
            background-color: rgba(248, 146, 32, 1);
            color: white;
        }
        .btn-jun2 {
            background-color: rgba(31, 0, 255, 1);
            color: white;
        }
    </style>
</head>
<body>
@dd( $formattedCoins )
    <div class="menu-container">  
        <div class="menu">
            <a href="" class="btn btn-jun">Kirim Koin</a>
            <a href="" class="btn btn-jun1">Aktivitas Transaksi</a>
            <a href="logout.php" class="btn btn-jun2">Keluar</a>
        </div>
    </div>
        
    <div class="saldo">
        <p>Jumlah Saldo</p><br>
        <p class="coin"> Rp    </p>
    </div>

    <div>
        <h1></h1>
    </div>

    <div class="bro">
        <h1 class="bro1">
            <span style="color: rgba(34, 25, 99, 1);">Arjun</span>
            All 
            <span style="color: rgba(248, 146, 32, 1);">Pay!!!</span>
        </h1>
        <p class="bro2">
            Apa yang Membuat Arjun Pay Berbeda? Temukan Keunggulannya
        </p>

        <div class="container">
            <h6 class="bro3">
                <img src="img/waktu.png" alt="" height="120px">
                Transaksi Instan dan Cepat
            </h6>
            <h6 class="bro4">
                <img src="img/kemu.png" alt="" height="120px">
                Kemudahan Pembayaran Tagihan
            </h6>
            <h6 class="bro5">
                <img src="img/aman.png" alt="" height="120px">
                Keamanan Tingkat Tinggi
            </h6>
        </div>
        <div class="container">
            <h6 class="bro3">
                <img src="img/history.png" alt="" height="98px">
                Riwayat Transaksi yang Jelas dan Terperinci
            </h6>
            <h6 class="bro4">
                <img src="img/hadiah.png" alt="" height="120px">
                Dapatkan Rewards Dan Cashback
            </h6>
            <h6 class="bro5">
                <img src="img/user.png" alt="" height="120px">
                Pengalaman Pembayaran Tanpa Ribet
            </h6>
        </div>
    </div>

    <div class="jun">
        <button class="jun1" onclick="window.location.href='profile.php';"></button>
        <button class="jun2" onclick="window.location.href='top-up.php';">Isi Saldo</button>
        <button class="jun3">Minta Saldo</button>
    </div>
</body>
</html>
