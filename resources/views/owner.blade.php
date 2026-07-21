<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Owner</title>

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
            overflow-x:hidden;
        }

        /* SIDEBAR */

        .sidebar{
            width:260px;
            height:100vh;
            background:#071c2f;
            position:fixed;
            left:0;
            top:0;
            padding:30px 20px;
            overflow-y:auto;
            z-index:999;
        }

        .logo{
            font-size:28px;
            font-weight:700;
            color:#4cc9ff;
            margin-bottom:40px;
        }

        .menu-title{
            color:#7aa6c7;
            margin-top:25px;
            margin-bottom:10px;
            font-size:14px;
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            padding:14px 18px;
            border-radius:12px;
            margin-bottom:10px;
            transition:0.3s;
        }

        .sidebar a:hover{
            background:#0d2d4d;
        }

        .active{
            background:#00b4ff;
        }

        /* CONTENT */

        .main-content{
            margin-left:260px;
            width:calc(100% - 260px);
            min-height:100vh;
            padding:40px;
        }

        h1{
            color:#4cc9ff;
            font-size:42px;
            margin-bottom:30px;
        }

        .card-container{
            display:flex;
            gap:20px;
            margin-bottom:30px;
        }

        .card{
            flex:1;
            background:rgba(255,255,255,0.05);
            padding:30px;
            border-radius:25px;
        }

        .card h2{
            font-size:20px;
            margin-bottom:15px;
        }

        .card p{
            font-size:35px;
            font-weight:700;
        }

        .table-box{
            background:rgba(255,255,255,0.05);
            padding:30px;
            border-radius:25px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        table th{
            background:#00b4ff;
            padding:18px;
        }

        table td{
            padding:18px;
            border-bottom:1px solid rgba(255,255,255,0.1);
        }

    </style>

</head>
<body>


<!-- SIDEBAR -->

<div class="sidebar">

    <div class="logo">
        STOCK<br>GUDANG
    </div>

    <a href="/owner" class="active">
        🏠 Dashboard
    </a>

    <div class="menu-title">
        DATA BARANG
    </div>

    <a href="/owner/bahan-baku">
        📦 Bahan Baku
    </a>

    <a href="/owner/barang-jadi">
        📦 Barang Jadi
    </a>

    <a href="/owner/stock-opname">
        📋 Stock Opname
    </a>

    <div class="menu-title">
        PRODUKSI
    </div>

    <a href="#">
        🏭 Produksi Harian
    </a>

    <a href="#">
        ❌ Barang Reject
    </a>

    <div class="menu-title">
        TRANSAKSI
    </div>

    <a href="#">
        📥 Barang Masuk
    </a>

    <a href="#">
        📤 Barang Keluar
    </a>

    <a href="#">
        🚚 Supplier
    </a>

    <a href="#">
        👥 Customer
    </a>

    <div class="menu-title">
        MESIN
    </div>

    <a href="#">
        🛠 Data Mesin
    </a>

    <a href="#">
        🔧 Maintenance
    </a>

    <div class="menu-title">
        LAPORAN
    </div>

    <a href="#">
        📊 Laporan Stok
    </a>

    <a href="#">
        📈 Laporan Produksi
    </a>

    <a href="#">
        📑 Laporan Transaksi
    </a>

    <div class="menu-title">
        USER
    </div>

    <a href="#">
        👥 User
    </a>

    <div class="menu-title">
        PENGATURAN
    </div>

    <a href="#">
        ⚙️ Pengaturan
    </a>

    <a href="/logout">
        🚪 Logout
    </a>

</div>


<!-- CONTENT -->

<div class="main-content">

    <h1>Dashboard Owner</h1>

    <div class="card-container">

        <div class="card">
            <h2>Total Barang</h2>
            <p>{{ count($barang) }}</p>
        </div>

        <div class="card">
            <h2>Barang Masuk</h2>
            <p>45</p>
        </div>

        <div class="card">
            <h2>Barang Keluar</h2>
            <p>20</p>
        </div>

    </div>

    <div class="table-box">

        <h2>Data Barang Terbaru</h2>

        <table>

            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga</th>
            </tr>

            @foreach($barang as $item)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $item->nama_barang }}</td>

                <td>{{ $item->stok }}</td>

                <td>{{ $item->harga }}</td>

            </tr>

            @endforeach

        </table>

    </div>

</div>

</body>
</html>