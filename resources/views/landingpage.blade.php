<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/landingpage.css') }}">
    <title>Landing Page</title>
</head>
<body>
    <div class="landingpage">
        <div class="left-side">
            <video src="/asset/video/video_1.mp4" autoplay muted loop></video>
            <h2>KAMI</h2>
            <br>
            <h2>MENDENGAR</h2>
            <br>
            <h2>MU</h2>
            <p><span id="phrases"></span></p>
        
            <div class="container">
                <h3></h3><span></span></h3>
            </div>
        </div>

        <div class="right-side">
            <h3>Mulai Untuk Melapor ?</h3>
            <div class="nav_button">
                <a href="/home">Beranda</a>
                <a href="/login">Masuk</a>
                <a href="/about">Tentang Kami</a>
            </div>
        </div>
    </div>
    <script src="/JS/landingpage.js"></script>
</body>
</html>