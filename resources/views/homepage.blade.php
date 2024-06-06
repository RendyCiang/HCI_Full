<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/homepage.css') }}">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <title>Home Page</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <img src="/asset/photo/logo.png" alt="">
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#video">Video Terkini</a></li>
                <li><a href="">Laporan</a></li>
                <li><a href="">Pengaduan</a></li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
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
            <h4><span>Informasi Terkini</span></h4>
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
            <h3>Video Terkini</h3>
        </div>
        <div class="video_section">
            <div class="video_column">
                <video src="/asset/video/video_3.mp4" play></video>
                <div class="video_text">
                    <h3>Your Title Here</h3>
                    <p>Your Text Here</p>
                </div>
            </div>

            <div class="video_column">
                <video src="/asset/video/video_2.mp4" play></video>
                <div class="video_text">
                    <h3>Your Title Here</h3>
                    <p>Your Text Here</p>
                </div>
            </div>

            <div class="video_column">
                <video src="/asset/video/video_4.mp4" play></video>
                <div class="video_text">
                    <h3>Your Title Here</h3>
                    <p>Your Text Here</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer">
            <div class="footer_column">
                <h3>Informasi</h3>
                <ul>
                    <li><a href="">Tentang Kami</a></li>
                    <li><a href="">Laporan</a></li>
                    <li><a href="">Pengaduan</a></li>
                </ul>
            </div>

            <div class="footer_column">
                <h3>Hubungi Kami</h3>
                <ul>
                    <li><a href="">NgelaporYuk@gmail.com</a></li>
                    <li><a href="">+62184234234</a></li>
                    <li><a href=""><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.468502472548!2d106.77967977465528!3d-6.201758493786012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6dcc7d2c4ad%3A0x209cb1eef39be168!2sBINUS%20University%2C%20Kampus%20BINUS%20Anggrek!5e0!3m2!1sen!2sid!4v1717657713844!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></a></li>
                </ul>
            </div>

            <div class="footer_column">
                <h3>Media Sosial</h3>
                <ul>
                    <li><a href="https://www.facebook.com"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="https://instagram.com"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="https://x.com"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                      </svg></a></li>
                </ul>
            </div>
            
            <div class="footer_column">
                <h3>Tetap Terhubung</h3>
                <form>
                    <input type="email" placeholder="Masukan Email Anda" required>
                    <button type="submit">Beritahu Saya</button>
                </form>
            </div>
        </div>
    </footer>
    <script src="{{ asset('JS/homepage.js') }}"></script>
</body>
</html>
