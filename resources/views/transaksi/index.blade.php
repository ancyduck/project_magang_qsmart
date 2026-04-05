@extends('layout.app')
@section('content_title', 'Transaksi')

@section('content')

    <div class="flex gap-6">

        <!-- ================= PRODUK ================= -->
        <div class="w-2/3">

            <!-- Search + Filter -->
            <div class="flex gap-3 mb-4">
                <input type="text" placeholder="Cari produk..."
                    class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">

                <select class="border rounded-md px-3 py-2">
                    <option>Semua</option>
                    <option>Makanan</option>
                    <option>Minuman</option>
                </select>
            </div>

            <!-- Grid Produk -->
            <div class="grid grid-cols-3 gap-4">

                <!-- Produk Card -->
                <div onclick="tambahKeranjang('Nasi Goreng',25000)"
                    class="bg-white rounded-lg shadow p-4 cursor-pointer hover:shadow-lg hover:bg-green-50 transition">

                    <h4 class="font-semibold">Nasi Goreng</h4>
                    <p class="text-sm text-gray-500">Makanan</p>
                    <p class="text-green-600 font-bold mt-2">Rp 25.000</p>
                </div>

                <div onclick="tambahKeranjang('Mie Goreng',20000)"
                    class="bg-white rounded-lg shadow p-4 cursor-pointer hover:shadow-lg hover:bg-green-50 transition">

                    <h4 class="font-semibold">Mie Goreng</h4>
                    <p class="text-sm text-gray-500">Makanan</p>
                    <p class="text-green-600 font-bold mt-2">Rp 20.000</p>
                </div>

                <div onclick="tambahKeranjang('Es Teh',5000)"
                    class="bg-white rounded-lg shadow p-4 cursor-pointer hover:shadow-lg hover:bg-green-50 transition">

                    <h4 class="font-semibold">Es Teh</h4>
                    <p class="text-sm text-gray-500">Minuman</p>
                    <p class="text-green-600 font-bold mt-2">Rp 5.000</p>
                </div>

            </div>

        </div>

        <div class="w-1/3">

            <div class="bg-white rounded-lg shadow p-4 flex flex-col h-[80vh]">

                <!-- Header -->
                <div class="mb-3">
                    <h3 class="font-semibold text-lg">Keranjang</h3>
                    <p class="text-sm text-gray-400">
                        Kasir: {{ auth()->user()->name ?? 'Guest' }}
                    </p>
                </div>

                <!-- Items -->
                <div id="cartItems" class="flex-1 overflow-y-auto space-y-2 text-sm">
                    <!-- item muncul via JS -->
                </div>

                <!-- Total -->
                <div class="border-t pt-3 mt-3 text-sm">

                    <div class="flex justify-between">
                        <span>Subtotal</span>
                        <span id="subtotal">0</span>
                    </div>

                    <div class="flex justify-between">
                        <span>Pajak (10%)</span>
                        <span id="tax">0</span>
                    </div>

                    <div class="flex justify-between font-bold text-lg mt-2">
                        <span>Total</span>
                        <span id="total">0</span>
                    </div>

                </div>

                <!-- Button -->
                <button onclick="bayar()"
                    class="mt-4 bg-green-600 text-white py-2 rounded-md hover:bg-green-700 transition">
                    Bayar
                </button>

            </div>

        </div>

    </div>

@endsection
