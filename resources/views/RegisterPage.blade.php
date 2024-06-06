<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/RegisterPage.css">
    <link rel="stylesheet" href="{{ asset('CSS/RegisterPage.css') }}">
    <title>Register Page</title>
</head>
<body>
    <div class="RegistText">
        <h3>Registrasi</h3>
    </div>

    <form action="">
        <label for="nik">NIK</label>
        <input type="text" name="nik" id="nik">

        <label for="DOB">Tanggal Lahir</label>
        <input type="date" name="DOB" id="DOB">

        <label for="phone">No Telp.</label>
        <input type="text" name="phone" id="phone">

        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">  

        <label for="password">Konfirmasi Password</label>
        <input type="password" name="password" id="password">


        
        <div class="LoginText">
            <p>Sudah memiliki akun ? <a href="LoginPage.html">Masuk</a></p>
        </div>
        <button type="submit">Masuk</button>
    </form>
</body>
</html>