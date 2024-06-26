<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/report.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <title>Form Pengaduan</title>
</head>
<body>
    <header>
        @auth
        <nav id="navbar">
            <img src="/asset/photo/logo.png" alt="">
            <ul>
                <li><a href="/home#home">Beranda</a></li>
                <li><a href="/home#video">Berita Terkini</a></li>
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
                <li><a href="/home#home">Beranda</a></li>
                <li><a href="/home#video">Berita Terkini</a></li>
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

    <form action="/report1" id="#" method="POST" enctype="multipart/form-data">
        @csrf
       <div class="left">
            <label for="">Klasifikasi Laporan</label>
            <div class="radio_input">
                <input type="radio" name="klasifikasi" id="gangguan" value="{{ old('klasifikasi', 'Gangguan') }}">
                <label for="gangguan">Gangguan</label>

                
                <input type="radio" name="klasifikasi" id="aspirasi" value="{{ old('klasifikasi', 'Aspirasi') }}">
                <label for="aspirasi">Aspirasi</label>

                @error('klasifikasi')
                    <p style="color: red">{{ $message = "Pilih Salah Satu" }}</p>
                @enderror
            </div>

            <label for="">Tipe Laporan</label>
            <div class="radio_input">
                <input type="radio" name="tipe" id="anonim" value="{{ old('tipe', 'Anonim') }}">
                <label for="anonim">Anonim</label>
                
                
                <input type="radio" name="tipe" id="publik" value="{{ old('tipe', 'Publik') }}">
                <label for="publik">Publik</label>

                @error('tipe')
                    <p style="color: red">{{ $message = "Pilih Salah Satu" }}</p>
                @enderror
            </div>

            <label for="kategori">Kategori Laporan</label>
            <select name="kategori">
                <option>Pilih</option>
                <option value="Infrastruktur & Fasilitas Umum">Infrastruktur & Fasilitas Umum</option>
                <option value="Kebersihan Lingkungan">Kebersihan Lingkungan</option>
                <option value="Pelayanan Publik">Pelayanan Publik</option>
                <option value="Keamanan & Ketertiban">Keamanan & Ketertiban</option>
                <option value="Transportasi & Lalu Lintas">Transportasi & Lalu Lintas</option>
                <option value="Kesehatan & Kesejahteraan">Kesehatan & Kesejahteraan</option>
                <option value="Pendidikan">Pendidikan</option>
                <option value="Kesejahteraan Sosial">Kesejahteraan Sosial</option>
                <option value="Lingkungan Hidup">Lingkungan Hidup</option>
            </select>
            @error('kategori')
                <p style="color: red">{{ $message = "Kategori Perlu Dipilih" }}</p>
            @enderror

            <label for="provinsi">Provinsi</label>
            <select id="provinsi" name="provinsi">
                <option>Pilih</option>
            </select>
            @error('provinsi')
                <p style="color: red">{{ $message = "Provinsi Perlu Dipilih" }}</p>
            @enderror

            <label for="kabupaten">Kabupaten / Kota</label>
            <select name="kabupaten" id="kabupaten">
                <option>Pilih</option>
            </select>
            @error('kabupaten')
                <p style="color: red">{{ $message = "Kabupaten Perlu Dipilih" }}</p>
            @enderror
            
            
            <label for="kecamatan">Kecamatan</label>
            <select name="kecamatan" id="kecamatan">
                <option>Pilih</option>
            </select>
            @error('kecamatan')
                <p style="color: red">{{ $message }}</p>
            @enderror

            <label for="kelurahan">Kelurahan</label>
            <select name="kelurahan" id="kelurahan">
                <option>Pilih</option>
            </select>
            @error('kelurahan')
                <p style="color: red">{{ $message = "Kelurahan Perlu Dipilih" }}</p>
            @enderror

            
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" placeholder="Jl. Rindu Dia No. 19" value="{{ old('alamat') }}">
            @error('alamat')
                <p style="color: red">{{ $message = "Alamat Perlu Diisi" }}</p>
            @enderror

            <label for="pengaduan">Laporan Masalah</label>
            <input type="text" name="pengaduan" placeholder="Kucing saya nyangkut di atas pohon yang tinggi" value="{{ old('pengaduan') }}">
            @error('pengaduan')
                <p style="color: red">{{ $message = "Alasan Melapor Perlu Diisi" }}</p>
            @enderror

            <label for="bukti">Bukti Masalah</label>
            <input type="file" name="bukti">
            @error('bukti')
                <p style="color: red">{{ $message = "Bukti Gambar Perlu Disertakan" }}</p>
            @enderror

            <button type="submit">Laporkan!</button>
        </div>
        <div class="right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.468502472548!2d106.77967977465528!3d-6.201758493786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6dcc7d2c4ad%3A0x209cb1eef39be168!2sBINUS%20University%2C%20Kampus%20BINUS%20Anggrek!5e0!3m2!1sen!2sid!4v1717730929724!5m2!1sen!2sid" width="800" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </form>

    
    <script>
        fetch('https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json')
        .then(response => response.json())
        .then(provinces => {
            const selectElement = document.getElementById('provinsi');
            provinces.forEach(province => {
                const optionElement = document.createElement('option');
                optionElement.value = province.id;
                optionElement.text = province.name;
                selectElement.appendChild(optionElement);
            });
        });

        document.getElementById('provinsi').addEventListener('change', function() {
            const provinceId = this.value;
            const selectElement = document.getElementById('kabupaten');
            selectElement.innerHTML = '<option>Pilih</option>'; // Clear the existing options
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/${provinceId}.json`)
            .then(response => response.json())
            .then(regencies => {
                regencies.forEach(regency => {
                    const optionElement = document.createElement('option');
                    optionElement.value = regency.id;
                    optionElement.text = regency.name;
                    selectElement.appendChild(optionElement);
                });
            });
        });

        document.getElementById('kabupaten').addEventListener('change', function() {
            const regencyId = this.value;
            const selectElement = document.getElementById('kecamatan');
            selectElement.innerHTML = '<option>Pilih</option>'; // Clear the existing options
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/districts/${regencyId}.json`)
            .then(response => response.json())
            .then(districts => {
                districts.forEach(district => {
                    const optionElement = document.createElement('option');
                    optionElement.value = district.id;
                    optionElement.text = district.name;
                    selectElement.appendChild(optionElement);
            });
        });

        document.getElementById('kecamatan').addEventListener('change', function() {
        const districtId = this.value;
        const selectElement = document.getElementById('kelurahan');
        selectElement.innerHTML = '<option>Pilih</option>'; // Clear the existing options
        fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/villages/${districtId}.json`)
        .then(response => response.json())
        .then(villages => {
            villages.forEach(village => {
                const optionElement = document.createElement('option');
                optionElement.value = village.id;
                optionElement.text = village.name;
                selectElement.appendChild(optionElement);
            });
        });
    }); 
    });
        
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>