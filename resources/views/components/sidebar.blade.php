        <div class="sidebar bg-gray-800">

            <div class="logo">
                <i class="fa-solid fa-cash-register"></i>
                <span>{{ env('APP_NAME') }}</span>
            </div>
            <div class="pl-6 mb-3">
                @auth
                    <p class="font-semibold text-white">
                        {{ auth()->user()->name }}
                    </p>
                @endauth
            </div>

            <ul class="menu">

                <li>
                    <a href="/dashboard" aria-current="page"
                        class="{{ request()->is('dashboard') ? 'bg-gray-900  text-white' : 'text-gray-300 hover:bg-white/15 hover:text-white' }}  px-3 py-2 text-sm font-medium">
                        <i class="fa-solid fa-chart-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/transaksi" aria-current="page"
                        class="{{ request()->is('transaksi') ? 'bg-gray-900  text-white' : 'text-gray-300 hover:bg-white/15 hover:text-white' }}  px-3 py-2 text-sm font-medium">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Transaksi</span>
                    </a>
                </li>
                <li>
                    <a href="/stok" aria-current="page"
                        class="{{ request()->is('stok') ? 'bg-gray-900  text-white' : 'text-gray-300 hover:bg-white/15 hover:text-white' }}  px-3 py-2 text-sm font-medium">
                        <i class="fa-solid fa-box"></i>
                        <span>Stok Barang</span>
                    </a>
                </li>
                <li>
                    <a href="/laporan" aria-current="page"
                        class="{{ request()->is('laporan') ? 'bg-gray-900  text-white' : 'text-gray-300 hover:bg-white/15 hover:text-white' }}  px-3 py-2 text-sm font-medium">
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
