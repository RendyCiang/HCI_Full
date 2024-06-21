<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">    
    <link rel="stylesheet" href="{{ asset('CSS/homepage.css') }}">  
    <title>Home Page</title>
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

    <div class="home" id="home" >
        <div class="left-side">
            <div class="carousel">
                <a href="#" class="arrow arrow-left" onclick="changeImage(-1)"><i class="bi bi-arrow-left"></i></a>
                <img id="Carousel_Container" src="/asset/photo/jembatan_runtuh.jpeg">
                <a href="#" class="arrow arrow-right" onclick="changeImage(1)"><i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="Carousel_Mini">
                <img onclick="changeImageTo('/asset/photo/jembatan_runtuh.jpeg')" src="/asset/photo/jembatan_runtuh.jpeg">
                <img onclick="changeImageTo('/asset/photo/Jalan_Lubang.jpeg')" src="/asset/photo/Jalan_Lubang.jpeg">
                <img onclick="changeImageTo('/asset/photo/Monyet.jpg')" src="/asset/photo/Monyet.jpg">
                <img onclick="changeImageTo('/asset/photo/Pohon_Tumbang.jpeg')" src="/asset/photo/Pohon_Tumbang.jpeg">
            </div>
        </div>

        <div class="right-side">
            <h4><span>Laporan Terkini</span></h4>
            <div class="Information">
                <a href=""><h4><i class="bi bi-megaphone"></i>Jembatan Runtuh</h4></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sapiente architecto aliquid aut totam cum incidunt, molestias laudantium modi culpa!</p>

                <a href=""><h4><i class="bi bi-megaphone"></i>Jembatan Runtuh</h4></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sapiente architecto aliquid aut totam cum incidunt, molestias laudantium modi culpa!</p>

                <a href=""><h4><i class="bi bi-megaphone"></i>Jembatan Runtuh</h4></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sapiente architecto aliquid aut totam cum incidunt, molestias laudantium modi culpa!</p>

                <a href=""><h4><i class="bi bi-megaphone"></i>Jembatan Runtuh</h4></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sapiente architecto aliquid aut totam cum incidunt, molestias laudantium modi culpa!</p>

                <a href=""><h4><i class="bi bi-megaphone"></i>Jembatan Runtuh</h4></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sapiente architecto aliquid aut totam cum incidunt, molestias laudantium modi culpa!</p>

                <a href=""><h4><i class="bi bi-megaphone"></i>Jembatan Runtuh</h4></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sapiente architecto aliquid aut totam cum incidunt, molestias laudantium modi culpa!</p>

                <a href=""><h4><i class="bi bi-megaphone"></i>Jembatan Runtuh</h4></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sapiente architecto aliquid aut totam cum incidunt, molestias laudantium modi culpa!</p>

                <a href=""><h4><i class="bi bi-megaphone"></i>Jembatan Runtuh</h4></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sapiente architecto aliquid aut totam cum incidunt, molestias laudantium modi culpa!</p>

                <a href=""><h4><i class="bi bi-megaphone"></i>Jembatan Runtuh</h4></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sapiente architecto aliquid aut totam cum incidunt, molestias laudantium modi culpa!</p>
            </div>
        </div>
    </div>

    <div class="Container_Video" id="video">
        <div class="title">
            <h3>Berita Terkini</h3>
        </div>
        <div class="video_section">
            @forelse($Info as $data)
            <div class="video_column">
                <img src="{{ asset('/storage'.'/'. $data->video )}}" alt="">
                <div class="video_text">
                    <a href="/video/{{ $data->id }}"><h3>{{ $data->title }}</h3></a>
                    <p>{{ $data->info }}</p>
                </div>
            </div>
            @empty
            <p style="margin-left:38%">Admin akan sesegera mungkin memberikan berita terkini</p>
        @endforelse
    </div>

    <footer>
        <div class="footer">
            <div class="footer_column">
                <h3>Informasi</h3>
                <ul>
                    <li><a href="/about">Tentang Kami</a></li>
                    <li><a href="">Instansi Terkait</a></li>
                </ul>
            </div>

            <div class="footer_column">
                <h3>Hubungi Kami</h3>
                <ul>
                    <li><a href="https://mail.google.com/mail/u/5/#inbox?compose=GTvVlcRzBlDZJkKWHhqkJBvBcNpKbvHDCCCCrjNDsKRQxVMlnsSGgPJvkvCkCpvHkKxRxHGmmjbbh">NgelaporYuk@gmail.com</a></li>
                    <li><a href="">+62184234234</a></li>
                    <li><a href=""><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.468502472548!2d106.77967977465528!3d-6.201758493786012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6dcc7d2c4ad%3A0x209cb1eef39be168!2sBINUS%20University%2C%20Kampus%20BINUS%20Anggrek!5e0!3m2!1sen!2sid!4v1717657713844!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></a></li>
                </ul>
            </div>

            <div class="footer_column">
                <h3>Tetap Terhubung</h3>
                <form action="/notify" method="POST">
                    @csrf
                    <label for="email">
                        <input type="email" placeholder="Masukan Email Anda" name="email">
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                        <button type="submit">Beritahu Saya</button>
                    </label>
                </form>
                <div class="social">
                    <ul>
                        <li><a href="https://www.facebook.com"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="https://instagram.com"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="https://x.com"><svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                          </svg></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('JS/homepage.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
