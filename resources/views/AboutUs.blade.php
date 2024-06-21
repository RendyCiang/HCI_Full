<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('CSS/about.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">    

    <title>About Us</title>
</head>
<body>
    <header>
        @auth
        <nav id="navbar">
            <img src="/asset/photo/logo.png" alt="">
            <ul>
                <li><a href="/home#home">Beranda</a></li>
                <li><a href="/home#video">Video Terkini</a></li>
                <li><a href="/dashboard">Laporan</a></li>
                <li><a href="/report">Pengaduan</a></li>
                @if(auth()->user()->role =='admin')
                <li><a href="/add-video">Tambah Informasi</a></li>
                @endif
            </ul>
            <div class="dropdown_profile">

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person"></i>
                    </button>
                        
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/profile">Profil, {{ auth()->user()->name }}  </a>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">Keluar</button>
                        </form>
                    </div>
                </div>
            </div>

            @else 
            <nav id="navbar">
            <img src="/asset/photo/logo.png" alt="">
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#video">Berita Terkini</a></li>
                <li><a href="/dashboard">Laporan</a></li>
                <li><a href="/report">Pengaduan</a></li>
            </ul>
            <div class="dropdown_profile">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person"></i>
                    </button>
                        
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/profile"">Profile </a>
                        <a class="dropdown-item" href="/login"">Masuk </a>
                        
                    </div>
                </div>
            </div>
            @endauth
        </nav>
    </header>

    <div class="tentang">
        <h3>Tentang Kami</h3>
        <p>Kami merupakan sebuah layanan yang menjadi sebuah tempat untuk melayani masyarakat.</p>
        <p>Masyarakat dapat memberikan Laporan baik berguna sebagai Aspirasi atau untuk menyelesaikan permasalahan yang dihadapi di lingkungannya. </p>
        <p>Disini juga terdapat berita terkini yang dapat diakses oleh masyarakat.</p>
        <p>Kami sangat terbuka dengan berbagai saran maupun masukan dari masyarakt</p>
        <p>Dari Rakyat, Untuk Rakyat</p>
    </div>

    <div class="visi">
        <h3>Visi</h3>
        <p>Menjadi layanan yang terdepan dalam memberikan ruang bagi masyarakat untuk menyampaikan aspirasi dan menyelesaikan permasalahan lingkungan secara efektif dan transparan.</p>
    </div>

    <div class="misi">
        <h3>Misi</h3>
        <ul>
            <li>Memfasilitasi komunikasi yang terbuka dan konstruktif antara masyarakat dan pihak terkait.</li>
            <li>Menyediakan platform yang mudah diakses untuk masyarakat dalam memberikan laporan dan aspirasi.</li>
            <li>Menginformasikan berita terkini yang relevan dan penting untuk diketahui oleh masyarakat.</li>
            <li>Mendorong partisipasi aktif masyarakat dalam upaya penyelesaian masalah lingkungan.</li>
            <li>Menerima dan mempertimbangkan berbagai saran serta masukan dari masyarakat demi peningkatan kualitas layanan.</li>
            <li>Mengutamakan kepentingan dan kesejahteraan masyarakat dalam setiap langkah dan keputusan yang diambil.</li>
            <li>Mengembangkan kerjasama yang kuat dengan berbagai pihak untuk menciptakan solusi yang berkelanjutan bagi permasalahan lingkungan.</li>
        </ul>
    </div>

    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>