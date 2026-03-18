@extends('layout.app')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="laporan-container">

        <!-- HEADER -->
        <div class="laporan-header">
            <div>
                <h2>Laporan Penjualan</h2>
                <p>Analisis dan statistik penjualan foodcourt</p>
            </div>

            <select class="filter">
                <option>Minggu Ini</option>
                <option>Bulan Ini</option>
            </select>
        </div>

        <!-- CARDS -->
        <div class="cards">

            <div class="card blue">
                <p>Total Penjualan</p>
                <h3>Rp 183.000</h3>
                <span>+12.5%</span>
            </div>

            <div class="card green">
                <p>Transaksi</p>
                <h3>3</h3>
                <span>+8.2%</span>
            </div>

            <div class="card orange">
                <p>Rata-rata</p>
                <h3>Rp 61.000</h3>
                <span>+5.1%</span>
            </div>

            <div class="card purple">
                <p>Item Terjual</p>
                <h3>12</h3>
                <span>+15.3%</span>
            </div>

        </div>

        <!-- CHART -->
        <div class="charts">

            <div class="chart-box">
                <h4>Tren Penjualan Mingguan</h4>
                <canvas id="lineChart"></canvas>
            </div>

            <div class="chart-box">
                <h4>Penjualan Per Hari</h4>
                <canvas id="barChart"></canvas>
            </div>

        </div>

        <!-- BOTTOM -->
        <div class="bottom">

            <div class="box">
                <h4>Produk Terlaris</h4>

                <div class="item">
                    <span>1. Nasi Goreng</span>
                    <b>Rp 1.125.000</b>
                </div>

                <div class="item">
                    <span>2. Sate Ayam</span>
                    <b>Rp 875.000</b>
                </div>

                <div class="item">
                    <span>3. Mie Goreng</span>
                    <b>Rp 625.000</b>
                </div>
            </div>

            <div class="box">
                <h4>Metode Pembayaran</h4>

                <div class="progress">
                    <label>Tunai (45%)</label>
                    <div class="bar blue" style="width:45%"></div>
                </div>

                <div class="progress">
                    <label>QRIS (30%)</label>
                    <div class="bar green" style="width:30%"></div>
                </div>

                <div class="progress">
                    <label>Debit/Kredit (25%)</label>
                    <div class="bar orange" style="width:25%"></div>
                </div>

            </div>

        </div>

    </div>

    <!-- SCRIPT CHART -->
    <script>
        const lineChart = new Chart(document.getElementById('lineChart'), {
            type: 'line',
            data: {
                labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
                datasets: [{
                    label: 'Penjualan',
                    data: [450, 600, 520, 700, 780, 950, 850],
                    borderWidth: 2,
                    fill: false,
                    tension: 0.4
                }]
            }
        });

        const barChart = new Chart(document.getElementById('barChart'), {
            type: 'bar',
            data: {
                labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
                datasets: [{
                    label: 'Penjualan',
                    data: [450, 600, 520, 700, 780, 950, 850],
                    borderWidth: 1
                }]
            }
        });
    </script>
@endsection
