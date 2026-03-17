<!DOCTYPE html>
<html>
<head>

<title>POS Kasir</title>

@vite(['resources/css/app.css','resources/js/app.js'])

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<div class="layout">

<!-- SIDEBAR -->

<div class="sidebar">

<div class="logo">
<i class="fa-solid fa-cash-register"></i>
<span>POS</span>
</div>

<ul class="menu">

<li>
<a href="/">
<i class="fa-solid fa-chart-line"></i>
<span>Dashboard</span>
</a>
</li>

<li>
<a href="/transaksi">
<i class="fa-solid fa-cart-shopping"></i>
<span>Transaksi</span>
</a>
</li>

<li>
<a href="/stok">
<i class="fa-solid fa-box"></i>
<span>Stok Barang</span>
</a>
</li>

<li>
<a href="/laporan">
<i class="fa-solid fa-file-lines"></i>
<span>Laporan</span>
</a>
</li>

<li class="logout">

<form method="POST" action="{{ route('logout') }}">
@csrf
<button type="submit">

<i class="fa-solid fa-right-from-bracket"></i>
<span>Logout</span>

</button>
</form>

</li>

</ul>

</div>

<!-- CONTENT -->

<div class="content">

@yield('content')

</div>

</div>

</body>
</html>