<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Barang</title>

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
            top:0;
            left:0;
            padding:30px 20px;
            overflow-y:auto;
            z-index:1000;
        }

        .logo{
            font-size:28px;
            font-weight:700;
            color:#4cc9ff;
            margin-bottom:40px;
            line-height:1.4;
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
            font-size:18px;
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
            margin-bottom:30px;
            font-size:42px;
        }

        .box{
            background:rgba(255,255,255,0.05);
            padding:30px;
            border-radius:25px;
            overflow-x:auto;
        }

        input{
            width:100%;
            padding:18px;
            margin-bottom:20px;
            border:none;
            border-radius:14px;
            background:#0a2239;
            color:white;
            font-size:16px;
        }

        input:focus{
            outline:none;
        }

        button{
            background:#00b4ff;
            color:white;
            border:none;
            padding:16px 28px;
            border-radius:14px;
            cursor:pointer;
            font-size:16px;
            font-weight:600;
            margin-bottom:30px;
        }

        table{
            width:100%;
            min-width:900px;
            border-collapse:collapse;
        }

        table th{
            background:#00b4ff;
            padding:18px;
            font-size:18px;
        }

        table td{
            padding:18px;
            border-bottom:1px solid rgba(255,255,255,0.1);
        }

        .hapus{
            color:red;
            text-decoration:none;
            font-weight:600;
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

    <a href="/owner/barang">
        📦 Bahan Baku
    </a>

    <a href="#">
        📦 Barang Jadi
    </a>

    <a href="#">
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

    <h1>Data Barang</h1>

    <div class="box">

        <form action="/owner/barang/store" method="POST">

            <?php echo csrf_field(); ?>

            <input type="text"
            name="nama_barang"
            placeholder="Nama Barang">

            <input type="number"
            name="stok"
            placeholder="Stok">

            <input type="number"
            name="harga"
            placeholder="Harga">

            <button type="submit">
                Tambah Barang
            </button>

        </form>

        <table>

            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>

            <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>

                <td><?php echo e($loop->iteration); ?></td>

                <td><?php echo e($item->nama_barang); ?></td>

                <td><?php echo e($item->stok); ?></td>

                <td><?php echo e($item->harga); ?></td>

                <td>

                    <a href="/owner/barang/delete/<?php echo e($item->id); ?>"
                    class="hapus">

                        Hapus

                    </a>

                </td>

            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>

    </div>

</div>

</body>
</html><?php /**PATH C:\laragon\www\stok_gudang\resources\views/owner-barang.blade.php ENDPATH**/ ?>