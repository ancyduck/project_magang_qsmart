<!DOCTYPE html>
<html>

<head>

    <title>Login - POS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="auth-body">
    <div class="auth-container">
        <div class="auth-card">
            <h2>Login POS</h2>
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4"">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password">
                </div>
                <button class="auth-btn">
                    Login
                </button>
                <p class="auth-link">
                    Belum punya akun?
                    <a href="/register">Register</a>
                </p>
            </form>
        </div>
    </div>
</body>

</html>
