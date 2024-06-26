<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">    

    <link rel="stylesheet" href="/CSS/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <header>
        @auth
        <nav id="navbar">
            <img src="/asset/photo/logo.png" alt="">
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#video">Berita Terkini</a></li>
                <li><a href="/dashboard">Laporan</a></li>
                <li><a href="/report">Pengaduan</a></li>
                @if(auth()->user()->role =='admin')
                <li><a href="/add-video">Tambah Berita</a></li>
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

    <form id="dashboardForm" class="dashboard">
        @foreach($ReportData as $data)
        <div class="dashboard_column">
            <div class="left">
                <label for="dashboardKlasifikasi">Klasifikasi Laporan</label>
                <p>{{ $data->klasifikasi }}</p>

                <label for="dashboardTipe">Tipe Laporan</label>
                <p>{{ $data->tipe }}</p>
                
                <label for="dashboardKategori">Kategori Laporan</label>
                <p>{{ $data->kategori }}</p>
    
                <label for="dashboardAlamat">Alamat</label>
                <p>{{ $data->alamat }}</p>
    
                <label for="dashboardPengaduan">Laporan Masalah</label>
                <p>{{ $data->pengaduan }}</p>
    
                <label for="dashboardUrgensi">Tingkat Urgensi</label>
                <p>{{ $data->urgensi }}</p>
    
                <label for="dashboardBukti">Bukti Masalah</label>
                <br>
                <a href="{{ asset('/storage'.'/'. $data->bukti )}}">{{ $data->bukti }}</a>
                <div class="view_stat">
                    <button>View Status</button>
                </div>
            </div>
    
            <div class="right">
                <label for="dashboardProvinsi">Provinsi</label>
                <p>{{ $data->provinsi }}</p>
    
                <label for="dashboardKabupaten">Kabupaten / Kota</label>
                <p>{{ $data->kabupaten }}</p>
    
                <label for="dashboardKecamatan">Kecamatan</label>
                <p>{{ $data->kecamatan }}</p>
    
                <label for="dashboardKelurahan">Kelurahan</label>
                <p>{{ $data->kelurahan }}</p>
            </div>
        </div>
        @endforeach
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>