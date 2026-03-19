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

<tbody>

<tr>
<td>TRX-001</td>
<td>14 Mar 2026, 10.30</td>
<td>
Nasi Goreng x2<br>
Es Teh Manis x2
</td>
<td><span class="badge tunai">Tunai</span></td>
<td class="total">Rp 66.000</td>
<td><button class="btn-detail">Detail</button></td>
</tr>

<tr>
<td>TRX-002</td>
<td>14 Mar 2026, 11.15</td>
<td>
Sate Ayam x1<br>
Jus Jeruk x1
</td>
<td><span class="badge qris">QRIS</span></td>
<td class="total">Rp 42.000</td>
<td><button class="btn-detail">Detail</button></td>
</tr>

<tr>
<td>TRX-003</td>
<td>14 Mar 2026, 12.00</td>
<td>
Bakso x3<br>
Air Mineral x3
</td>
<td><span class="badge debit">Debit</span></td>
<td class="total">Rp 75.000</td>
<td><button class="btn-detail">Detail</button></td>
</tr>

</tbody>

</table>

</div>

<div class="summary-cards">

<div class="card">
<p>Total Transaksi</p>
<h3>3</h3>
</div>

<div class="card">
<p>Total Penjualan</p>
<h3 class="green">Rp 183.000</h3>
</div>

<div class="card">
<p>Rata-rata</p>
<h3 class="orange">Rp 61.000</h3>
</div>

</div>

</div>

@endsection
