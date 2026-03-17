<!DOCTYPE html>
<html>

<head>

    <title>POS Kasir</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <div class="layout">

        <!-- SIDEBAR -->

        <x-sidebar></x-sidebar>

        <!-- CONTENT -->

        <div class="content">

            @yield('content')

        </div>

    </div>

</body>

</html>
