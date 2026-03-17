<!DOCTYPE html>
<html>
<head>

<title>Login - POS</title>

@vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="auth-body">

<div class="auth-container">

<div class="auth-card">

<h2>Login POS</h2>

<form method="POST" action="/login">

@csrf

<div class="form-group">

<label>Email</label>
<input type="email" name="email" required>

</div>

<div class="form-group">

<label>Password</label>
<input type="password" name="password" required>

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
