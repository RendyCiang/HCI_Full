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

    <form action="/register" method="POST">
        @csrf
        <label for="NIK">NIK</label>
        <input type="text" name="NIK" id="NIK" placeholder="310805011050003" value="{{ old('NIK')}}">
        @error('NIK')
            <p>{{$message = "16 Angka"}}</p>
        @enderror
       
        <label for="name">Nama</label>
        <input type="text" name="name" id="name" placeholder="Tono" value="{{ old('name') }}">
        @error('name')
            <p>{{$message = "minimal 4 karakter"}}</p>
        @enderror

        <label for="DOB">Tanggal Lahir</label>
        <input type="date" name="DOB" id="DOB" >

        <label for="phone">No Telp.</label>
        <input type="text" name="phone" id="phone" value="{{ old('phone') }}" placeholder="08xxxxxxxx">
        @error('phone')
            <p>{{$message = "Diawali 08 & minimum 12"}}</p>
        @enderror        

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="email@gmail.com">
        @error('email')
            <p>{{$message = "email@gmail.com"}}</p>
        @enderror

        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="{{ old('password') }}">  
        @error('password')
            <p>{{ $message }}</p>
        @enderror

        
        <div class="LoginText">
            <p>Sudah memiliki akun ? <a href="/login">Masuk</a></p>
        </div>
        <button type="submit">Masuk</button>
    </form>
</body>
</html>