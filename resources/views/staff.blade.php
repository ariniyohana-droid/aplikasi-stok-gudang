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
            font-family:'Poppins',sans-serif;
        }

        body{
            background:linear-gradient(135deg,#031524,#000814,#001d3d);
            color:white;
            display:flex;
            min-height:100vh;
        }

        .sidebar{
            width:270px;
            background:rgba(255,255,255,0.05);
            backdrop-filter:blur(20px);
            border-right:1px solid rgba(255,255,255,0.1);
            padding:30px 20px;
        }

        .logo{
            font-size:30px;
            font-weight:700;
            color:#4cc9ff;
            margin-bottom:40px;
        }

        .menu-title{
            color:#8ecae6;
            margin-top:25px;
            margin-bottom:10px;
            font-size:13px;
            text-transform:uppercase;
        }

        .menu a{
            display:block;
            text-decoration:none;
            color:white;
            padding:12px 15px;
            border-radius:12px;
            margin-bottom:8px;
            transition:0.3s;
        }

        .menu a:hover{
            background:#00b4ff;
            transform:translateX(5px);
        }

        .main{
            flex:1;
            padding:40px;
        }

        .title{
            font-size:42px;
            color:#7dd3fc;
            margin-bottom:30px;
        }

        .cards{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:20px;
            margin-bottom:30px;
        }

        .card{
            background:rgba(255,255,255,0.06);
            border:1px solid rgba(255,255,255,0.1);
            border-radius:20px;
            padding:25px;
            box-shadow:0 0 20px rgba(0,180,255,0.25);
        }

        .card h3{
            margin-bottom:15px;
            font-size:18px;
        }

        .card p{
            font-size:35px;
            font-weight:700;
        }

        .table-box{
            background:rgba(255,255,255,0.05);
            border-radius:25px;
            padding:30px;
            border:1px solid rgba(255,255,255,0.1);
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        table th{
            background:#00b4ff;
            padding:15px;
            text-align:left;
        }

        table td{
            padding:15px;
            border-bottom:1px solid rgba(255,255,255,0.1);
        }

    </style>
</head>
<body>

    <div class="sidebar">

        <div class="logo">
            📦 STOCK GUDANG
        </div>

        <div class="menu">

            <div class="menu-title">Dashboard</div>
            <a href="#">🏠 Dashboard</a>

            <div class="menu-title">Data Barang</div>
            <a href="#">📦 Data Barang</a>
            <a href="#">🗂️ Kategori Barang</a>

            <div class="menu-title">Transaksi</div>
            <a href="#">📥 Barang Masuk</a>
            <a href="#">📤 Barang Keluar</a>
            <a href="#">🔄 Retur Barang</a>

            <div class="menu-title">Stock Opname</div>
            <a href="#">📋 Stock Opname</a>

            <div class="menu-title">Laporan</div>
            <a href="#">📊 Laporan Stok</a>
            <a href="#">📄 Barang Masuk</a>
            <a href="#">📄 Barang Keluar</a>

            <div class="menu-title">Notifikasi</div>
            <a href="#">🔔 Stok Menipis</a>

            <div class="menu-title">Akun</div>
            <a href="#">👤 Profil Saya</a>
            <a href="#">🚪 Logout</a>

        </div>

    </div>

    <div class="main">

        <h1 class="title">
            Dashboard Staff Gudang
        </h1>

        <div class="cards">

            <div class="card">
                <h3>Total Barang</h3>
                <p>120</p>
            </div>

            <div class="card">
                <h3>Barang Masuk</h3>
                <p>45</p>
            </div>

            <div class="card">
                <h3>Barang Keluar</h3>
                <p>20</p>
            </div>

        </div>

        <div class="table-box">

            <h2>Data Barang</h2>

            <table>

                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Harga</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Aluminium Sheet</td>
                    <td>50</td>
                    <td>500000</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Handle Pintu</td>
                    <td>80</td>
                    <td>75000</td>
                </tr>

            </table>

        </div>

    </div>

</body>
</html>