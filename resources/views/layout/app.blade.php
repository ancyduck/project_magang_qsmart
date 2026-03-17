<!DOCTYPE html>
<html>
<head>

<title>POS Kasir</title>

@vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body>

<div class="app-container">

<!-- Sidebar -->
<div class="sidebar" id="sidebar">

<h2 class="logo">POS</h2>

<a href="/dashboard">Dashboard</a>
<a href="/transaksi">Transaksi</a>
<a href="/stok">Stok Barang</a>
<a href="/laporan">Laporan</a>
<a href="/logout">Logout</a>

</div>

<!-- Main -->
<div class="main-content">

<!-- Topbar -->
<div class="topbar">

<button id="menu-toggle">☰</button>

<h3>@yield('title')</h3>

</div>

<div class="content">

@yield('content')

</div>

</div>

</div>

<script src="{{ asset('resources/js/sidebar.js') }}"></script>

</body>
</html>
