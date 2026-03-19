@extends('layout.app')

@section('content')

<div class="transaksi-page">

<div class="page-header">

<div>
<h2>Riwayat Transaksi</h2>
<p>Lihat dan kelola riwayat transaksi penjualan</p>
</div>

<button class="btn-export">
Ekspor Data
</button>

</div>

<div class="search-box">
<input type="text" placeholder="Cari berdasarkan ID transaksi...">
</div>

<div class="table-container">

<table>

<thead>

<tr>
<th>ID Transaksi</th>
<th>Tanggal & Waktu</th>
<th>Items</th>
<th>Metode Bayar</th>
<th>Total</th>
<th>Aksi</th>
</tr>

</thead>

<tbody id="transaksiBody">

<tr>
<td colspan="6" class="empty-state">
📦 Belum ada transaksi
</td>
</tr>

</tbody>

</table>

</div>

<div class="summary-cards">

<div class="card">
<p>Total Transaksi</p>
<h3>0</h3>
</div>

<div class="card">
<p>Total Penjualan</p>
<h3 class="green">Rp 0</h3>
</div>

<div class="card">
<p>Rata-rata</p>
<h3 class="orange">Rp 0</h3>
</div>

</div>

</div>

@endsection
