@extends('layouts.app')

@section('content')

<div class="wrapper">

<div class="sidebar">

<div class="logo">📦 STOCK GUDANG</div>

<a href="#">🏠 Dashboard</a>

<div class="menu-title">Master Data</div>
<div class="submenu">
<a href="#">Data Barang</a>
<a href="#">Kategori Barang</a>
<a href="#">Supplier</a>
<a href="#">Customer</a>
<a href="#">Lokasi Gudang</a>
</div>

<div class="menu-title">Transaksi</div>
<div class="submenu">
<a href="#">Barang Masuk</a>
<a href="#">Barang Keluar</a>
<a href="#">Purchase Order</a>
<a href="#">Penjualan</a>
<a href="#">Retur Barang</a>
</div>

<div class="menu-title">Laporan</div>
<div class="submenu">
<a href="#">Laporan Stok</a>
<a href="#">Barang Masuk</a>
<a href="#">Barang Keluar</a>
<a href="#">Penjualan</a>
@endsection