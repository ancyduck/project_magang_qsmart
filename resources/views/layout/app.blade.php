<!DOCTYPE html>
<html>

<head>

    <title>POS Kasir</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body class="font-sans">

    <div class="flex min-h-screen bg-gray-100">
        <div id="overlay" class="fixed inset-0 bg-black/50 hidden z-30 md:hidden" onclick="toggleSidebar()"></div>

        <!-- Sidebar -->
        <x-sidebar />

        <!-- Main Area -->
        <div class="flex-1 flex flex-col">

            <!-- Header -->
            <header class="h-16 bg-white border-b flex items-center justify-between px-6">
                <!-- KIRI -->
                <div class="flex items-center gap-4">
                    <!-- tombol mobile -->
                    <button class="md:hidden text-gray-700" onclick="toggleSidebar()">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>

                    <h1 class="text-lg font-semibold">
                        @yield('content_title')
                    </h1>
                </div>
                <!-- KANAN -->
                <div class="text-sm text-gray-600">
                    {{ auth()->user()->name ?? 'Guest' }}
                </div>
            </header>

            <div id="overlay" class="fixed inset-0 bg-black/50 hidden z-30 md:hidden" onclick="toggleSidebar()"></div>

            <!-- Content -->
            <main class="flex-1 p-6 bg-gray-50">
                @yield('content')
            </main>

        </div>

    </div>

</body>

</html>
