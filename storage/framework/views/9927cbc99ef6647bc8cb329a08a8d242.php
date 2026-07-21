<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Gudang</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:linear-gradient(135deg,#021024,#052659,#5483B3);
            min-height:100vh;
            color:white;
            display:flex;
        }

        .sidebar{
            width:260px;
            background:rgba(0,0,0,0.3);
            padding:30px 20px;
            backdrop-filter:blur(10px);
        }

        .logo{
            font-size:28px;
            font-weight:700;
            margin-bottom:40px;
            color:#38bdf8;
        }

        .menu a{
            display:block;
            padding:14px;
            margin-bottom:10px;

            text-decoration:none;
            color:white;

            border-radius:12px;

            transition:0.3s;
        }

        .menu a:hover{
            background:#0ea5e9;
        }

        .content{
            flex:1;
            padding:40px;
        }

        .title{
            font-size:38px;
            margin-bottom:30px;
            font-weight:700;
        }

        .card-container{
            display:flex;
            gap:20px;
            flex-wrap:wrap;
        }

        .card{
            width:250px;
            padding:25px;

            border-radius:20px;

            background:rgba(255,255,255,0.08);

            box-shadow:0 0 20px rgba(0,255,255,0.2);
        }

        .card h3{
            font-size:18px;
            margin-bottom:15px;
        }

        .card p{
            font-size:32px;
            font-weight:bold;
        }

    </style>

</head>
<body>

    <div class="sidebar">

        <div class="logo">
            STOCK GUDANG
        </div>

        <div class="menu">
            <a href="#">🏠 Dashboard</a>
            <a href="#">📦 Data Barang</a>
            <a href="#">📥 Barang Masuk</a>
            <a href="#">📤 Barang Keluar</a>
            <a href="#">📊 Laporan</a>
            <a href="#">👤 Profil Saya</a>
            <a href="/login">🚪 Logout</a>
        </div>

    </div>

    <div class="content">

        <div class="title">
            Dashboard Staff Gudang
        </div>

        <div class="card-container">

            <div class="card">
                <h3>Total Barang</h3>
                <p>840</p>
            </div>

            <div class="card">
                <h3>Barang Masuk</h3>
                <p>150</p>
            </div>

            <div class="card">
                <h3>Barang Keluar</h3>
                <p>120</p>
            </div>

        </div>

    </div>

</body>
</html><?php /**PATH C:\laragon\www\stok_gudang\resources\views/staff/dashboard.blade.php ENDPATH**/ ?>