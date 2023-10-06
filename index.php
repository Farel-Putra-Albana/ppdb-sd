<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Website Resmi SDN 013 Tanjungpinang Barat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="app/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="app/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />

    <!-- Icon Website -->
    <link rel="shortcut icon" href="app/asset/logosmk.png">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="app/style/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.php" class="navbar-brand px-lg-4 m-0">
                <img src="app/asset/logo.png" alt="Logo" class="logo-img">
                <h1 class="m-0 display-4 text-danger">
                    <span class="smkne">SD NE</span>
                    <span class="geri">GERI 013</span>
                    <br>
                    <span class="tanjung">TANJUNG</span>
                    <span class="pinang">PINANG</span>
                    <span class="barat">BARAT</span>
                </h1>
            </a>
            <button aria-label="name" type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu text-capitalize" id="profil-dropdown">
                            <a href="app/user/jadwal.php" class="dropdown-item">Visi dan Misi</a>
                            <a href="app/user/hasil_seleksi.php" class="dropdown-item">Tata Tertib</a>
                            <div class="dropdown-divider garis-menu"></div>
                            <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown">Sumber Daya</a>
                            <div class="dropdown-menu text-capitalize" id="sumberdaya-submenu">
                                <a href="#" class="dropdown-item">Data Guru</a>
                                <a href="#" class="dropdown-item">Data Kepala Sekolah</a>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">PPDB 2023</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="app/user/jadwal.php" class="dropdown-item">Petunjuk Teknis</a>
                            <a href="" class="dropdown-item">Pendaftaran Ulang</a>
                            <a href="app/user/hasil_seleksi.php" class="dropdown-item">Pengumuman Hasil Seleksi</a>
                        </div>
                    </div>
                    <a href="#berita" class="nav-item nav-link">Berita</a>
                    <a href="#informasi" class="nav-item nav-link">Informasi Resmi</a>
                    <a href="app/login/login_form.php" class="nav-item nav-link">Admin Menu</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="app/asset/background.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center carousel-caption">
                        <h1 id="animated-text" class="display-1 text-white m-0">- SELAMAT DATANG -</h1>
                        <h2 class="text-white m-0">DI WEBSITE RESMI SMK NEGERI 6 TANJUNGPINANG
                            Sekolah Pusat Keunggulan Bidang Seni dan Ekonomi Kreatif</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title" id="profil">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Profil Sekolah</h4>
                <h1 class="display-4">SMKN 6 TANJUNGPINANG</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3 text-center">VISI SMKN 6 TANJUNGPINANG</h1>
                    <p class="text-center">"Menjadi sekolah IT unggulan yang mempersiapkan generasi muda untuk menghadapi tantangan masa depan dengan penuh kepercayaan diri, integritas, dan keunggulan akademik."</p>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="app/asset/SMKN 6.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3 text-center">MISI SMKN 6 TANJUNGPINANG</h1>
                    <h5 class="mb-3 text-center"><i class="fa fa-check text-primary mr-3"></i>Berkomitmen untuk menyediakan lingkungan belajar yang kondusif dan pendidikan yang berkualitas tinggi. Mendorong siswa untuk mencapai potensi terbaik mereka dalam bidang akademik, intelektual, dan karakter.</h5>
                    <h5 class="mb-3 text-center"><i class="fa fa-check text-primary mr-3"></i>Berfokus pada pengembangan keunggulan akademik siswa melalui kurikulum yang komprehensif dan beragam. Mendorong pemahaman mendalam siswa, pemikiran kritis, dan kreativitas siswa dalam memecahkan masalah.</h5>
                    <h5 class="mb-3 text-center"><i class="fa fa-check text-primary mr-3"></i>Mengutamakan pembentukan karakter siswa yang kokoh, termasuk integritas, rasa tanggung jawab, kejujuran, kerjasama, dan rasa empati. Kami berupaya menjadikan siswa sebagai warga negara yang bertanggung jawab dan berkontribusi positif dalam masyarakat.</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title" id="berita">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Berita Utama</h4>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="app/asset/ppdb.png" alt="">
                        <div class="ml-3">
                            <h4>Informasi PPDB SMK Negeri 6 Tanjungpinang</h4>
                        </div>
                    </div>
                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis incidunt reprehenderit quidem autem. Deserunt, accusamus obcaecati. Ea, aspernatur, incidunt quisquam quod placeat minima sint impedit animi, eos quidem id ut!</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="app/asset/lele.png" alt="">
                        <div class="ml-3">
                            <h4>Budidaya Lele SMK Negeri 6 Tanjungpinang</h4>
                        </div>
                    </div>
                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis incidunt reprehenderit quidem autem. Deserunt, accusamus obcaecati. Ea, aspernatur, incidunt quisquam quod placeat minima sint impedit animi, eos quidem id ut!</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="app/asset/hidroponik.png" alt="">
                        <div class="ml-3">
                            <h4>Budidaya Hidroponik SMK Negeri 6</h4>
                        </div>
                    </div>
                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis incidunt reprehenderit quidem autem. Deserunt, accusamus obcaecati. Ea, aspernatur, incidunt quisquam quod placeat minima sint impedit animi, eos quidem id ut!</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="app/asset/Prestasi.png" alt="">
                        <div class="ml-3">
                            <h4>Siswa Berprestasi SMKN 6 Tanjungpinang</h4>
                        </div>
                    </div>
                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis incidunt reprehenderit quidem autem. Deserunt, accusamus obcaecati. Ea, aspernatur, incidunt quisquam quod placeat minima sint impedit animi, eos quidem id ut!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top" id="informasi">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5 kiri">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Alamat</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Jl. Gatot Subroto, KM 6 no 121</p>
                <p><i class="fa fa-phone-alt mr-2"></i>(0771) 450-7199</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>informasi@smkn6-tpi.sch.id</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 tengah">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>
                <p>Kunjungi Sosial Media untuk Informasi Lainnya</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 kanan">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Jam Sekolah</h4>
                <div>
                    <h6 class="text-white text-uppercase">Senin - Kamis</h6>
                    <p>07.00 AM - 15.30 PM</p>
                    <h6 class="text-white text-uppercase">Jumat</h6>
                    <p>07.00 AM - 11.30 AM</p>
                    <h6 class="text-white text-uppercase">Sabtu</h6>
                    <p>07.00 AM - 14.30 AM</p>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">Domain</a>. All Rights Reserved.</a></p>
            <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="#">Kelompok 3 - Perancangan Web</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="app/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="app/lib/tempusdominus/js/moment.min.js"></script>
    <script src="app/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script>
        // Menambahkan event listener untuk mengatur perilaku submenu "Sumber Daya"
        document.getElementById('sumberdaya-dropdown').addEventListener('mouseover', function() {
            document.getElementById('sumberdaya-submenu').style.display = 'block';
        });

        // Menambahkan event listener untuk menyembunyikan submenu "Sumber Daya" saat kursor meninggalkan item "Sumber Daya"
        document.getElementById('sumberdaya-dropdown').addEventListener('mouseout', function() {
            document.getElementById('sumberdaya-submenu').style.display = 'none';
        });

        // Menambahkan event listener untuk menyembunyikan submenu "Sumber Daya" saat kursor meninggalkan item "Profil"
        document.getElementById('profil-dropdown').addEventListener('mouseout', function() {
            document.getElementById('sumberdaya-submenu').style.display = 'none';
        });
    </script>

    <!-- Template Javascript -->
    <script src="app/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        const text = document.getElementById('animated-text');
        const textContent = text.innerHTML;
        text.innerHTML = '';

        for (let i = 0; i < textContent.length; i++) {
            const letterSpan = document.createElement('span');
            letterSpan.textContent = textContent[i];
            letterSpan.style.animation = `animatedText 2s infinite ${i * 0.1}s`;
            text.appendChild(letterSpan);
        }
    </script>
</body>

</html>