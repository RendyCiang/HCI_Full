<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/LoginPage.css') }}">
    <title>Login Page</title>
</head>
<body>
    <div class="LoginText">
        <h3>Masuk</h3>
    </div>

    <form action="/login" method="POST">
        @csrf
        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        
        <div class="registerText">
            <p>Tidak memiliki akun ? <a href="/register">Registrasi</a></p>
        </div>
        <button type="submit">Masuk</button>
    </form>
</body>
</html>