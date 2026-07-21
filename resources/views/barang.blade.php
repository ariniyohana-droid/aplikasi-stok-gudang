<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Gudang</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ICON -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Plus Jakarta Sans',sans-serif;
        }

        body{
            background:
            linear-gradient(135deg,#081028,#0d1635,#101b45);

            min-height:100vh;

            color:white;
        }

        /* SIDEBAR */

        .sidebar{
            width:260px;
            height:100vh;

            position:fixed;
            left:0;
            top:0;

            background:
            linear-gradient(180deg,#111f4d,#0a1435);

            padding:30px 20px;

            border-right:
            1px solid rgba(255,255,255,0.08);
        }

        .logo{
            display:flex;
            align-items:center;
            gap:15px;

            margin-bottom:50px;
        }

        .logo-icon{
            width:55px;
            height:55px;

            border-radius:18px;

            background:
            linear-gradient(135deg,#2b7fff,#7b61ff);

            display:flex;
            justify-content:center;
            align-items:center;

            font-size:25px;
        }

        .logo-text h2{
            font-size:28px;
            margin:0;
            font-weight:700;
        }

        .logo-text p{
            margin:0;
            color:#9aa4d0;
            font-size:14px;
        }

        .menu a{
            display:flex;
            align-items:center;
            gap:15px;

            text-decoration:none;
            color:white;

            padding:16px 18px;

            margin-bottom:12px;

            border-radius:18px;

            transition:0.3s;
        }

        .menu a:hover{
            background:
            linear-gradient(135deg,#2b7fff,#7b61ff);

            transform:translateX(5px);
        }

        /* MAIN */

        .main{
            margin-left:260px;
            padding:30px;
        }

        /* TOPBAR */

        .topbar{
            display:flex;
            justify-content:space-between;
            align-items:center;

            margin-bottom:30px;
        }

        .title{
            font-size:32px;
            font-weight:700;
        }

        .search-box{
            width:350px;
            background:#121f4a;

            border-radius:20px;

            padding:12px 20px;

            border:
            1px solid rgba(255,255,255,0.08);
        }

        .search-box input{
            background:none;
            border:none;
            outline:none;
            color:white;
            width:100%;
        }

        /* CARD */

        .dashboard-card{
            background:#f7f9fc;

            border-radius:28px;

            padding:25px;

            color:#162048;

            height:100%;

            transition:0.3s;
        }

        .dashboard-card:hover{
            transform:translateY(-5px);
        }

        .dashboard-card h5{
            font-size:17px;
            color:#6c7596;
        }

        .dashboard-card h2{
            font-size:42px;
            font-weight:700;
        }

        .card-blue{
            background:#eef4ff;
        }

        .card-green{
            background:#eefbf3;
        }

        .card-purple{
            background:#f5f1ff;
        }

        /* BOX */

        .content-box{
            background:#f8f9fc;

            border-radius:30px;

            padding:30px;

            margin-top:30px;

            color:#162048;
        }

        .section-title{
            font-size:28px;
            font-weight:700;

            margin-bottom:25px;
        }

        /* FORM */

        .form-control{
            height:55px;

            border-radius:18px;

            border:
            1px solid #dfe5f2;

            padding-left:20px;
        }

        .form-control:focus{
            box-shadow:none;

            border:
            1px solid #5d7cff;
        }

        /* BUTTON */

        .btn-custom{
            height:55px;

            border:none;

            border-radius:18px;

            background:
            linear-gradient(135deg,#2b7fff,#7b61ff);

            color:white;

            font-weight:600;

            padding:0 30px;
        }

        .btn-custom:hover{
            opacity:0.9;
        }

        /* TABLE */

        .table{
            margin-top:20px;
        }

        .table thead{
            background:#f2f5fb;
        }

        .table th{
            padding:18px;

            border:none;

            color:#66719a;

            font-weight:600;
        }

        .table td{
            padding:20px;

            vertical-align:middle;

            border-bottom:
            1px solid #edf1f7;
        }

        .aksi-btn{
            width:40px;
            height:40px;

            border-radius:12px;

            border:none;

            color:white;
        }

        .btn-edit{
            background:#2b7fff;
        }

        .btn-delete{
            background:#ff5f6d;
        }

    </style>

</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <div class="logo">

        <div class="logo-icon">
            <i class="fa-solid fa-cube"></i>
        </div>

        <div class="logo-text">
            <h2>STOK GUDANG</h2>
            <p>Inventory System</p>
        </div>

    </div>

    <div class="menu">

        <a href="#">
            <i class="fa-solid fa-house"></i>
            Dashboard
        </a>

        <a href="#">
            <i class="fa-solid fa-box"></i>
            Barang
        </a>

        <a href="#">
            <i class="fa-solid fa-layer-group"></i>
            Kategori
        </a>

        <a href="#">
            <i class="fa-solid fa-chart-line"></i>
            Laporan
        </a>

        <a href="#">
            <i class="fa-solid fa-gear"></i>
            Pengaturan
        </a>

    </div>

</div>

<!-- MAIN -->
<div class="main">

    <!-- TOPBAR -->

    <div class="topbar">

        <div class="title">
            Dashboard
        </div>

        <div class="search-box">
            <input type="text" placeholder="Cari barang...">
        </div>

    </div>

    <!-- CARD -->

    <div class="row g-4">

        <div class="col-md-4">

            <div class="dashboard-card card-blue">

                <h5>Total Barang</h5>

                <h2>{{ count($barang) }}</h2>

            </div>

        </div>

        <div class="col-md-4">

            <div class="dashboard-card card-green">

                <h5>Total Stok</h5>

                <h2>{{ $barang->sum('stok') }}</h2>

            </div>

        </div>

        <div class="col-md-4">

            <div class="dashboard-card card-purple">

                <h5>Total Nilai</h5>

                <h2>
                    Rp
                    {{ number_format($barang->sum(function($b){
                        return $b->stok * $b->harga;
                    })) }}
                </h2>

            </div>

        </div>

    </div>

    <!-- FORM -->

    <div class="content-box">

        <div class="section-title">
            Tambah Barang
        </div>

        <form action="/store" method="POST">

            @csrf

            <div class="row g-3">

                <div class="col-md-4">

                    <input type="text"
                    name="nama_barang"
                    class="form-control"
                    placeholder="Nama Barang"
                    required>

                </div>

                <div class="col-md-3">

                    <input type="number"
                    name="stok"
                    class="form-control"
                    placeholder="Stok"
                    required>

                </div>

                <div class="col-md-3">

                    <input type="number"
                    name="harga"
                    class="form-control"
                    placeholder="Harga"
                    required>

                </div>

                <div class="col-md-2">

                    <button class="btn btn-custom w-100">
                        Tambah
                    </button>

                </div>

            </div>

        </form>

    </div>

    <!-- TABLE -->

    <div class="content-box">

        <div class="section-title">
            Daftar Barang
        </div>

        <table class="table">

            <thead>

                <tr>

                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                @foreach($barang as $b)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $b->nama_barang }}</td>

                    <td>{{ $b->stok }}</td>

                    <td>
                        Rp {{ number_format($b->harga) }}
                    </td>

                    <td>

                        <a href="/hapus/{{ $b->id }}">

                            <button class="aksi-btn btn-delete">

                                <i class="fa-solid fa-trash"></i>

                            </button>

                        </a>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

</body>
</html>