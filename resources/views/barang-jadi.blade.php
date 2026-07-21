<!DOCTYPE html>
<html>
<head>

<title>Barang Jadi</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Poppins;
}

body{
background:linear-gradient(to right,#06213d,#010b2d);
color:white;
display:flex;
}

.sidebar{
width:280px;
height:100vh;
background:#08203a;
padding:40px 20px;
position:fixed;
}

.logo{
font-size:32px;
font-weight:700;
color:#16b9ff;
margin-bottom:60px;
}

.menu-title{
font-size:14px;
color:#9db5d3;
margin:30px 0 15px;
}

.menu a{
display:block;
padding:18px 20px;
margin-bottom:15px;
border-radius:18px;
color:white;
text-decoration:none;
font-size:18px;
}

.active{
background:#14bfff;
}

.content{
margin-left:300px;
padding:50px;
width:100%;
}

.box{
background:#102540;
padding:40px;
border-radius:30px;
margin-top:30px;
}

table{
width:100%;
border-collapse:collapse;
margin-top:20px;
}

th{
background:#1dbcf2;
padding:20px;
font-size:20px;
}

td{
padding:25px 20px;
border-bottom:1px solid rgba(255,255,255,0.1);
font-size:18px;
}

.edit{
background:orange;
padding:10px 18px;
border-radius:10px;
color:white;
text-decoration:none;
margin-right:10px;
}

.hapus{
background:red;
padding:10px 18px;
border-radius:10px;
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

<div class="menu">

<a href="/owner">🏠 Dashboard</a>

<div class="menu-title">DATA BARANG</div>

<a href="/bahan-baku">📦 Bahan Baku</a>

<a href="/barang-jadi" class="active">
📦 Barang Jadi
</a>

<a href="/stock-opname">
📋 Stock Opname
</a>

<a href="/logout">🚪 Logout</a>

</div>

</div>

<div class="content">

<h1 style="font-size:60px;color:#18bfff;">
Barang Jadi
</h1>

<div class="box">

<table>

<tr>
<th>Kode</th>
<th>Nama Barang</th>
<th>Stok</th>
<th>Status</th>
<th>Aksi</th>
</tr>

<tr>
<td>BJ001</td>
<td>Pintu Aluminium</td>
<td>35</td>
<td>Ready</td>
<td>
href="/barang-jadi/edit/1"
href="/barang-jadi/delete/1"
</td>
</tr>

<tr>
<td>BJ002</td>
<td>Jendela Aluminium</td>
<td>20</td>
<td>Ready</td>
<td>
href="/barang-jadi/edit/2"
href="/barang-jadi/delete/2"
</td>
</tr>

<tr>
<td>BJ003</td>
<td>Lemari Aluminium</td>
<td>12</td>
<td>Produksi</td>
<td>
href="/barang-jadi/edit/3"
href="/barang-jadi/delete/3"
</td>
</tr>

</table>

</div>

</div>

</body>
</html>