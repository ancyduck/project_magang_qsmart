<!DOCTYPE html>
<html>
<head>

<title>Register - POS</title>

@vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="auth-body">

<div class="auth-container">

<div class="auth-card">

<h2>Register POS</h2>

<form method="POST" action="/register">

@csrf

<div class="form-group">

<label>Nama</label>
<input type="text" name="name" required>

</div>

<div class="form-group">

<label>Email</label>
<input type="email" name="email" required>

</div>

<div class="form-group">

<label>Password</label>
<input type="password" name="password" required>

</div>

<div class="form-group">

<label>Konfirmasi Password</label>
<input type="password" name="password_confirmation" required>

</div>

<button class="auth-btn">
Register
</button>

<p class="auth-link">

Sudah punya akun?
<a href="/login">Login</a>

</p>

</form>

</div>

</div>

</body>
</html>

