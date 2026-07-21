<!DOCTYPE html>
<html>
<head>

<title>Edit Barang</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

body{
background:#07162b;
font-family:Poppins;
padding:40px;
color:white;
}

.box{
background:#102540;
padding:30px;
border-radius:20px;
}

input{
width:100%;
padding:18px;
margin-bottom:20px;
border:none;
border-radius:12px;
background:#163353;
color:white;
}

button{
background:#11bfff;
padding:15px 30px;
border:none;
border-radius:12px;
color:white;
font-size:16px;
}

</style>

</head>
<body>

<div class="box">

<h1>Edit Barang</h1>

<form action="/owner/barang/update/{{ $barang->id }}" method="POST">

@csrf

<input type="text"
name="nama_barang"
value="{{ $barang->nama_barang }}">

<input type="number"
name="stok"
value="{{ $barang->stok }}">

<input type="number"
name="harga"
value="{{ $barang->harga }}">

<input type="text"
name="supplier"
value="{{ $barang->supplier }}">

<input type="text"
name="customer"
value="{{ $barang->customer }}">

<button type="submit">
Update Barang
</button>

</form>

</div>

</body>
</html>