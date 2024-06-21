<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('CSS/profile.css') }}">
    <title>Profile Dashboard</title>
</head>
<body> 
    <div class="profile">
        <div class="profile-image">
            
        </div>
        <div class="profile-content">
            <h3>NIK</h3>
            <p>{{ $UserData->NIK }}</p>

            <h3>Nama</h3>
            <p>{{ $UserData->name }}</p>

            <h3>Tanggal Lahir</h3>
            <p>{{ $UserData->DOB }}</p>

            <h3>Email</h3>
            <p>{{ $UserData->email }}</p>

            <h3>No. Telp</h3>
            <p>{{ $UserData->phone }}</p>
        </div>
        <button><a href="/home">Kembali</a></button>
    </div>
</body>
</html>