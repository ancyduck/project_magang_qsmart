@extends('layout.app')

@section('content')
    <div class="stok-container">

        <!-- HEADER -->
        <div class="stok-header">
            <div>
                <h2>Manajemen Stok Barang</h2>
                <p>Kelola inventori dan stok produk Anda</p>
            </div>

            <button class="btn-primary">+ Tambah Barang</button>
        </div>

        <!-- SEARCH -->
        <div class="search-box">
            <input type="text" placeholder="Cari barang berdasarkan nama atau kode...">
        </div>

        <!-- TABLE -->
        <div class="table-container">

            <h4>Daftar Stok Barang</h4>

            <table>
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>F004</td>
                        <td>Bakso</td>
                        <td><span class="badge">Makanan</span></td>
                        <td>Rp 20.000</td>
                        <td>60 unit</td>
                        <td><span class="status aman">Stok Aman</span></td>
                        <td>
                            <button class="icon-btn edit"><i class="fa fa-edit"></i></button>
                            <button class="icon-btn delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>F005</td>
                        <td>Gado-Gado</td>
                        <td><span class="badge">Makanan</span></td>
                        <td>Rp 18.000</td>
                        <td>35 unit</td>
                        <td><span class="status sedang">Stok Sedang</span></td>
                        <td>
                            <button class="icon-btn edit"><i class="fa fa-edit"></i></button>
                            <button class="icon-btn delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>D001</td>
                        <td>Es Teh Manis</td>
                        <td><span class="badge">Minuman</span></td>
                        <td>Rp 8.000</td>
                        <td>100 unit</td>
                        <td><span class="status aman">Stok Aman</span></td>
                        <td>
                            <button class="icon-btn edit"><i class="fa fa-edit"></i></button>
                            <button class="icon-btn delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>

            </table>

        </div>

        <!-- SUMMARY -->
        <div class="summary">

            <div class="card">
                <p>Total Item</p>
                <h3>7</h3>
            </div>

            <div class="card">
                <p>Stok Rendah</p>
                <h3 class="danger">0</h3>
            </div>

            <div class="card">
                <p>Total Nilai Stok</p>
                <h3 class="success">Rp 6.310.000</h3>
            </div>

        </div>

    </div>
@endsection
