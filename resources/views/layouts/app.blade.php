<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

body{
    margin:0;
    background:#f5f6fa;
    font-family:'Segoe UI',sans-serif;
}

.sidebar{
    position:fixed;
    left:0;
    top:0;
    width:290px;
    height:100vh;
    background:linear-gradient(180deg,#041633,#08275a);
    color:white;
}

.logo{
    padding:20px;
    border-bottom:1px solid rgba(255,255,255,.1);
}

.logo h5{
    margin-top:10px;
    font-size:15px;
}

.logo small{
    color:#d8d8d8;
}

.menu{
    padding:15px;
}

.menu-title{
    color:#cfcfcf;
    font-size:14px;
    margin-top:20px;
    margin-bottom:10px;
}

.menu a{
    display:block;
    text-decoration:none;
    color:white;
    padding:14px;
    border-radius:10px;
    margin-bottom:8px;
}

.menu a:hover{
    background:#1e56e7;
}

.active-menu{
    background:#2563eb;
}

.main{
    margin-left:290px;
}

.topbar{
    height:70px;
    background:#1453d8;
    display:flex;
    justify-content:space-between;
    align-items:center;
    color:white;
    padding:0 25px;
}

.content{
    padding:25px;
}

.card-box{
    background:white;
    border-radius:12px;
    padding:20px;
    box-shadow:0 2px 10px rgba(0,0,0,.08);
}

.table th{
    background:#f8f9fb;
}

</style>

</head>

<body>

<div class="sidebar">

    <div class="logo">

        <i class="fa-solid fa-warehouse fa-3x"></i>

        <h5>
            SISTEM INFORMASI<br>
            STOK & GUDANG
        </h5>

        <small>PABRIK ALUMINIUM</small>

    </div>

    <div class="menu">

        <div class="menu-title">
            MENU UTAMA
        </div>

        <a href="/dashboard">
            <i class="fa-solid fa-house"></i>
            Dashboard
        </a>

        <div class="menu-title">
            MASTER DATA
        </div>

        <a href="/barang" class="active-menu">
            <i class="fa-solid fa-cube"></i>
            Data Barang
        </a>

        <a href="#">
            <i class="fa-solid fa-users"></i>
            Supplier
        </a>

        <div class="menu-title">
            TRANSAKSI
        </div>

        <a href="#">
            <i class="fa-solid fa-download"></i>
            Barang Masuk
        </a>

        <a href="#">
            <i class="fa-solid fa-upload"></i>
            Barang Keluar
        </a>

        <div class="menu-title">
            LAPORAN
        </div>

        <a href="#">
            <i class="fa-solid fa-file"></i>
            Laporan
        </a>

        <a href="/">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </a>

    </div>

</div>

<div class="main">

    <div class="topbar">

        <i class="fa-solid fa-bars fa-2x"></i>

        <div>
            <i class="fa-solid fa-circle-user fa-2x"></i>
            Admin
        </div>

    </div>

    <div class="content">

        @yield('content')

    </div>

</div>

</body>
</html>