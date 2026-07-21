<!DOCTYPE html>
<html>
<head>
<title>Bahan Baku</title>

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
}

.sidebar{
width:260px;
height:100vh;
background:#071c2f;
position:fixed;
left:0;
top:0;
padding:30px 20px;
}

.logo{
font-size:30px;
font-weight:700;
color:#2ec5ff;
margin-bottom:40px;
}

.sidebar a{
display:block;
color:white;
text-decoration:none;
padding:14px 18px;
margin-bottom:10px;
border-radius:12px;
}

.sidebar a:hover{
background:#0d2d4d;
}

.active{
background:#00b4ff;
}

.main{
margin-left:260px;
padding:40px;
}

.title{
font-size:40px;
color:#2ec5ff;
margin-bottom:30px;
font-weight:700;
}

.table-box{
background:rgba(255,255,255,0.05);
padding:30px;
border-radius:20px;
}

table{
width:100%;
border-collapse:collapse;
}

th{
background:#11bfff;
padding:18px;
}

td{
padding:18px;
border-bottom:1px solid rgba(255,255,255,0.1);
}

.edit{
background:orange;
padding:8px 14px;
border-radius:8px;
color:white;
text-decoration:none;
margin-right:10px;
}

.hapus{
background:red;
padding:8px 14px;
border-radius:8px;
color:white;
text-decoration:none;
}

</style>
</head>
<body>

<div class="sidebar">

<div class="logo">
STOCK<br>GUDANG
</div>

<a href="/owner">🏠 Dashboard</a>

<a href="/owner/bahan-baku" class="active">
📦 Bahan Baku
</a>

<a href="/owner/barang-jadi">
📦 Barang Jadi
</a>

<a href="/owner/stock-opname">
📋 Stock Opname
</a>

<a href="/logout">
🚪 Logout
</a>

</div>

<div class="main">

<div class="title">
Bahan Baku
</div>

<div class="table-box">

<table>

<tr>
<th>Kode</th>
<th>Nama Bahan</th>
<th>Stok</th>
<th>Satuan</th>
<th>Supplier</th>
<th>Aksi</th>
</tr>

<tr>
<td>BB001</td>
<td>Plat Aluminium</td>
<td>120</td>
<td>Lembar</td>
<td>CV Maju</td>

<td>
<a href="/bahan-baku/edit/1" class="edit">
Edit
</a>

<a href="/bahan-baku/delete/1" class="hapus">
Hapus
</a>
</td>

</tr>

<tr>
<td>BB002</td>
<td>Kaca Tempered</td>
<td>80</td>
<td>Lembar</td>
<td>PT Glass</td>

<td>
<a href="/bahan-baku/edit/2" class="edit">
Edit
</a>

<a href="/bahan-baku/delete/2" class="hapus">
Hapus
</a>
</td>

</tr>

<tr>
<td>BB003</td>
<td>Karet Seal</td>
<td>300</td>
<td>Meter</td>
<td>UD Jaya</td>

<td>
<a href="/bahan-baku/edit/3" class="edit">
Edit
</a>

<a href="/bahan-baku/delete/3" class="hapus">
Hapus
</a>
</td>

</tr>

</table>

</div>

</div>

</body>
</html><?php /**PATH C:\laragon\www\stok_gudang\resources\views/bahan-baku.blade.php ENDPATH**/ ?>