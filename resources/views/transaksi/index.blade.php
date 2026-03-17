@extends('layout.app')

@section('content')

<h1>Transaksi</h1>

<div class="transaksi-container">

<div class="produk-area">

<input type="text" id="search" placeholder="Cari produk..." onkeyup="searchProduk()">

<select id="kategoriFilter" onchange="filterKategori()">

<option value="all">Semua</option>
<option value="makanan">Makanan</option>
<option value="minuman">Minuman</option>

</select>

<div class="produk-grid" id="produkList">

<div class="produk-card" data-kategori="makanan"
onclick="tambahKeranjang('Nasi Goreng',25000)">
Nasi Goreng<br>Rp 25.000
</div>

<div class="produk-card" data-kategori="makanan"
onclick="tambahKeranjang('Mie Goreng',20000)">
Mie Goreng<br>Rp 20.000
</div>

<div class="produk-card" data-kategori="minuman"
onclick="tambahKeranjang('Es Teh',5000)">
Es Teh<br>Rp 5.000
</div>

</div>

</div>

<div class="cart-area">

<h3>Keranjang</h3>

<div id="cartItems"></div>

<hr>

<p>Subtotal : <span id="subtotal">0</span></p>
<p>Pajak 10% : <span id="tax">0</span></p>

<h3>Total : <span id="total">0</span></h3>

<button onclick="bayar()">Bayar</button>

</div>

</div>

@endsection