@extends('layout.app')
@section('content_title', 'Dashboard')

@section('content')
    <div class="dashboard-cards">

        <div class="card">
            <h3>Total Produk</h3>
            <p>120</p>
        </div>

        <div class="card">
            <h3>Total Transaksi</h3>
            <p>54</p>
        </div>

        <div class="card">
            <h3>Pendapatan Hari Ini</h3>
            <p>Rp 1.200.000</p>
        </div>

        <div class="card">
            <h3>Stok Hampir Habis</h3>
            <p>5</p>
        </div>

    </div>
@endsection
