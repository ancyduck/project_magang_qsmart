@extends('layout.app')

@section('content')

<div class="container">

<!-- PRODUK AREA -->
<div class="produk-area">

<div class="search-bar">

<input id="search"
type="text"
placeholder="Cari barang..."
onkeyup="searchProduk()">

<select id="kategoriFilter"
onchange="filterKategori()">

<option value="all">Semua Kategori</option>
<option value="makanan">Makanan</option>
<option value="minuman">Minuman</option>

</select>

</div>

<div class="produk-grid" id="produkGrid">

@forelse($produk as $p)

<div class="produk-card"
data-kategori="{{ $p->kategori }}">

<div class="card-body">

<div class="kode">{{ $p->kode }}</div>

<div class="nama">{{ $p->nama }}</div>

<div class="harga">
Rp {{ number_format($p->harga) }}
</div>

<button onclick="tambahKeranjang('{{ $p->nama }}', {{ $p->harga }})">
+ Tambah
</button>

</div>

</div>

@empty

<div class="empty-produk">
📦 Belum ada produk
</div>

@endforelse

</div>

</div>

<!-- CART -->
<div class="cart">

<div class="cart-header">
Keranjang Belanja
</div>

<div id="cartItems" class="cart-body">
</div>

<div class="cart-footer">

<div>
Subtotal :
<span id="subtotal">Rp 0</span>
</div>

<div class="total">
Total :
<span id="total">Rp 0</span>
</div>

<button onclick="bayar()" class="btn-bayar">
Bayar Sekarang
</button>

</div>

</div>

</div>

@endsection
