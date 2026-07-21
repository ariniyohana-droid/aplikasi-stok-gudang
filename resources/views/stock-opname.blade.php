<!DOCTYPE html>
<html>
<head>

<title>Stock Opname</title>

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

<a href="/bahan-baku">
📦 Bahan Baku
</a>

<a href="/barang-jadi">
📦 Barang Jadi
</a>

<a href="/stock-opname" class="active">
📋 Stock Opname
</a>

<a href="/logout">🚪 Logout</a>

</div>

</div>

<div class="content">

<h1 style="font-size:60px;color:#18bfff;">
Stock Opname
</h1>

<div class="box">

<table>

<tr>
<th>Barang</th>
<th>Stok Sistem</th>
<th>Stok Fisik</th>
<th>Selisih</th>
<th>Aksi</th>
</tr>

<tr>
<td>Pintu Aluminium</td>
<td>35</td>
<td>34</td>
<td>-1</td>
<td>
<a href="/stock-opname/edit/1"
</td>
</tr>

<tr>
<td>Plat Aluminium</td>
<td>120</td>
<td>120</td>
<td>0</td>
<td>
<a href="/stock-opname/edit/2"
</td>
</tr>

</table>

</div>

</div>

</body>
</html>