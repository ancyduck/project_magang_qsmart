        <div class="sidebar">

            <div class="logo">
                <i class="fa-solid fa-cash-register"></i>
                <span>{{ env('APP_NAME') }}</span>
            </div>
            <div class="info">
                <a href="#">{{ auth()->user()->name }}</a>
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

                    <form method="POST" action="">
                        @csrf
                        <button type="submit">

                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span>Logout</span>

                        </button>
                    </form>

                </li>

            </ul>

        </div>
