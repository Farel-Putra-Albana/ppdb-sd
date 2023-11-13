<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Website Resmi SDN 013 Tanjungpinang Barat</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon" />
  <!--=============== REMIXICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/assets/css/styles.css">
</head>

<body>
  <!--=============== HEADER ===============-->
  <header class="header">
    <nav class="nav container">
      <div class="nav__data">
        <a href="#" class="nav__logo">
          <img src="assets/assets/navbar_logo.png" alt="navbar_logo">
        </a>

        <div class="nav__toggle" id="nav-toggle">
          <i class="ri-menu-line nav__burger"></i>
          <i class="ri-close-line nav__close"></i>
        </div>
      </div>

      <!--=============== NAV MENU ===============-->
      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li><a href="index.php" class="nav__link ri-home-5-line">Home</a></li>

          <!--=============== DROPDOWN 1 ===============-->
          <li class="dropdown__item">
            <div class="nav__link ri-profile-line">
              Profil <i class="ri-arrow-down-s-line dropdown__arrow"></i>
            </div>

            <ul class="dropdown__menu">
              <li>
                <a href="#profil-sekolah" class="dropdown__link">
                  <i class="ri-pie-chart-line"></i> Visi Misi
                </a>
              </li>

              <li>
                <a href="#tata-tertib" class="dropdown__link">
                  <i class="ri-pushpin-2-line"></i> Tata Tertib
                </a>
              </li>

              <!--=============== DROPDOWN SUBMENU ===============-->
              <li class="dropdown__subitem">
                <div class="dropdown__link">
                  <i class="ri-bar-chart-line"></i> Sumberdaya <i class="ri-add-line dropdown__add"></i>
                </div>

                <ul class="dropdown__submenu">
                  <li>
                    <a href="#kepala-sekolah" class="dropdown__sublink">
                      <i class="ri-user-line"></i> Data Kepala Sekolah
                    </a>
                  </li>

                  <li>
                    <a href="#data-guru" class="dropdown__sublink">
                      <i class="ri-team-line"></i> Data Guru
                    </a>
                  </li>

                  <li>
                    <a href="#fasilitas" class="dropdown__sublink">
                      <i class="ri-building-2-line"></i> Fasilitas Sekolah
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

          <!--=============== DROPDOWN 2 ===============-->
          <li class="dropdown__item">
            <div class="nav__link ri-school-line">
              PPDB 2023 <i class="ri-arrow-down-s-line dropdown__arrow"></i>
            </div>

            <ul class="dropdown__menu">
              <li>
                <a href="src/user/petunjuk_teknis.php" class="dropdown__link">
                  <i class="ri-search-eye-line"></i> Petunjuk Teknis
                </a>
              </li>

              <li>
                <a href="src/login_siswa/index.php" class="dropdown__link">
                  <i class="ri-lock-line"></i> Pendaftaran Ulang
                </a>
              </li>

              <li>
                <a href="src/user/hasil_seleksi.php" class="dropdown__link">
                  <i class="ri-file-search-line"></i> Pengumuman Hasil Seleksi
                </a>
              </li>
            </ul>
          </li>

          <li><a href="#berita" class="nav__link ri-article-line">Berita</a></li>

          <li><a href="#footer" class="nav__link ri-information-line">Informasi Resmi</a></li>

          <li><a href="src/admin_menu/login.php" class="nav__link ri-admin-line">Admin Menu</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Carousel Start -->
  <div id="header" class="container-fluid p-0 mb-5">
    <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="assets/img/background.png" alt="Image" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center carousel-caption">
            <h1 id="animated-text" class="display-1 text-white m-0">
              - SELAMAT DATANG -
            </h1>
            <h2 class="text-white m-0">
              DI WEBSITE RESMI SDN 013 TANJUNGPINANG BARAT Sekolah Pusat
              Keunggulan Bidang Seni dan Ekonomi Kreatif
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel End -->

  <main id="main">
    <!-- About Start -->
    <div id="profil" class="container-fluid py-1">
      <div class="container">
        <div class="section-title" id="profil">
          <hr id="profil-sekolah" style="border: 1px solid red; width: 1px; height: 100px; margin: 0 auto;">
          <h4 class="text-primary text-uppercase mt-2" align="center" style="letter-spacing: 5px">
            Profil Sekolah
          </h4>
          <h4 align="center" class="display-6">
            VISI & MISI <br />SD NEGERI 013 TANJUNGPINANG BARAT
          </h4>
        </div>
        <div class="row pt-5 pb-5">
          <div class="col-lg-5"><img src="assets/img/Visi-Misi.png" alt=""></div>
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
            <div class="content">
              <h3 align="center"><strong>Visi</strong></h3>
              <p align="center">
                Terwujudnya peserta didik yang berakhlak mulia, kreatif,
                sehat, cerdas, berwawasan dan berprofil pelajar pancasila
              </p>
              <h3 align="center"><strong>Misi</strong></h3>
              <p align="justify">
                1. Membiasakan siswa jujur dalam bertindak, serta bertanggung
                jawab terhadap diri, sekolah dan lingkungan. <br />
                2. Membiasakan siswa beribadah menurut agama dan kepercayaan
                masing-masing. <br />
                3. Membiasakan siswa melakukan 55: Seyum, Sapa, Salam, Sopan
                Santun dalam perilaku. <br />
                4. Membiasakan siswa menjaga Kesehatan diri, baik jasmani
                maupun rohani. <br />
                5. Membiasakan siswa meningkatkan kemampuan akademik maupun
                non akademik. <br />
                6. Membiasakan sikap peduli terhadap lingkungan dan pembinaan
                sikap santun pada orang tua, guru dan teman. <br />
                7. Membiasakan siswa untuk melestarikan lingkungan dengan
                melakukan tugas rutin sekolah. <br />
                8. Mengintegrasikan materi lingkungan hidup (LH) dalam mata
                pelajaran. <br />
                9. Membiasakan diri ikut kegiatan aksi lingkungan bersih.
                <br />
                10. Menjaga kelestarian lingkungan dengan mencegah pencemaran
                dan kerusakan lingkungan dengan program 7-K (Keamanan,
                Kebersihan, Keimanan, Keindahan, Ketertiban dan Kekeluargaan).
                <br />
                11. Mebangun lingkungan sekolah yang bertoleransi dalam
                kebhinekaan golbal, mencintai budaya local dan menjungung
                nilai gotong royonh.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- About Start -->
    <div class="container-fluid py-1 tata-tertib">
      <div class="container">
        <div id="tata-tertib">
          <hr id="tata-tertib" style="border: 1px solid red; width: 1px; height: 100px; margin: 0 auto;">
          <h4 class="display-6 text-center mt-2">
            TATA TERTIB <br />SD NEGERI 013 TANJUNGPINANG BARAT
          </h4>
        </div>
        <div class="row">
          <div class="col-lg-6 py-0 py-lg-2 tata-tertib-siswa">
            <h1 class="mb-3 text-center">A. Tata Tertib Bagi Siswa</h1>
            <p class="tata-tertib-siswa">
              1. Setiap hari kegiatan pagi dimulai pukul 07.00 wib. <br />
              2. Sepuluh menit sebelum kegiatan dimulai, semuasiswa harus
              sudah ada di sekolah . <br />
              3. Setiap hari pembelajaran dimulai pukul : 07.30 wib <br />
              4. Pada waktu pelajaran berlangsung siswa tidak diperkenankan
              keluar masuk ruangan kelas , kecuali telah mendapat izin dari
              Guru Kelas <br />
              5. Siswa yang berhalangan mengikuti pelajaran , apapun alasannya
              , orang tua / walinya harus memberitahukan secara tertulis atau
              lisan ke sekolah. <br />
              6. Setiap siswa wajib berpakaian seragam sekolah sesuai dengan
              ketentuan yang , yaitu : <br />
              a.Hari Senin - Selasa berpakaian seragam putih merah <br />
              b.Hari Rabu berpakaian batik <br />
              c.Hari Kamis berpakaian pramuka / olahraga <br />
              d.Hari Jum'at berpakaian baju kurung <br />
              7. Siswa tidak boleh memakai perhiasan yang berlebihan di
              sekolah untuk menghindari hal - hal yang tidak diinginkan ,
              <br />
              8. Siswa harus selalu berpakaian sopan dan rapi , baik di
              sekolah maupun di luar sekolah . <br />
              9. Setiap siswa wajib bersikap hormat kepada Kepala Sekolah ,
              semua guru , penjaga sekolah dan lainnya . <br />
              10.Setiap siswa wajib mengikuti salah satu kegiatan
              ekstrakurikuler sekolah , seperti pramuka , marawis , karate ,
              kesenian , dll .
            </p>
          </div>
          <div class="col-lg-6 py-0 py-lg-2 tata-tertib-guru">
            <h1 class="mb-3 text-center">B. Tata Tertib Bagi Guru</h1>
            <p>
              1. Setiap hari pelajaran dimulai pukul 07.30 WIB <br />
              2. Lima belas menit sebelum pelajaran dimulai , semua guru harus
              sudah ada di sekolah. <br />
              3. Guru yang berhalangan hadir wajib memberitahu baik Ilsan
              maupun tulisan kepada Kepala Sekolah <br />
              4. Tata tertib berpakaian untuk guru : a Hari Senin s.d. Selasa
              berpakaian PDH Coklat b.Hari Rabu berpakalan PGRI / Hitam -
              Putih Hari Kamis berpakalan Pramuka / Olah Raga d.Pada
              peringatan hari - hari tertentu dapat menyesuaikan dengan
              anjuran dari atasan / dinas . <br />
              5. Setiap guru wajib menjaga nama baik sekolah berkenaan dengan
              tugas pokok dan fungsinya sebagai tenaga pendidik <br />
            </p>
            <h1 class="mb-3 text-center">C. Sanksi</h1>
            <p>
              Sekolah dapat memberikan sanksi kepada warga ( siswa / guru )
              yang melanggar Tata Tertib ini dengan alternatif sanksi sebagai
              berikut ini : <br />
              1. Peringatan lisan <br />
              2. Peringatan tertulis
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1" class="purecounter"></span>
              <p>Tenaga Pendidik</p>
            </div>
          </div>
          <!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="224" data-purecounter-duration="1" class="purecounter"></span>
              <p>Peserta Didik</p>
            </div>
          </div>
          <!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p>Rombongan Belajar</p>
            </div>
          </div>
          <!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="31" data-purecounter-duration="1" class="purecounter"></span>
              <p>Sarana dan Prasarana</p>
            </div>
          </div>
          <!-- End Stats Item -->
        </div>
      </div>
    </section>
    <!-- End Stats Counter Section -->

    <!-- DATA KEPALA SEKOLAH -->
    <div class="container-fluid py-1">
      <div class="container">
        <div class="section-title" id="profil">
          <hr class="mt-4" id="kepala-sekolah" style="border: 1px solid red; width: 1px; height: 100px; margin: 0 auto;">
          <h4 class="text-primary text-uppercase mt-2" align="center" style="letter-spacing: 5px">
            Kepala Sekolah <br> SDN 013 Tanjungpinang Barat
          </h4>
        </div>
        <div class="row pt-5 pb-5">
          <div class="col-lg-5"><img src="assets/img/kepala sekolah.png" alt="kepala sekolah" height="450"></div>
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
            <div class="content">
              <h3 align="center"><strong>Kata Pengantar Kepala Sekolah</strong></h3>
              <p align="center">
                Terwujudnya peserta didik yang berakhlak mulia, kreatif,
                sehat, cerdas, berwawasan dan berprofil pelajar pancasila <br>
              <h6 class="text-center">- Marunah <span style="color: red;">Kepala Sekolah SDN 013 TPI Barat</span> -</h6>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- ======= Berita ======= -->
    <section class="testimonials section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <hr id="berita" style="border: 1px solid red; width: 1px; height: 100px; margin: 0 auto;">
          <h2 class="mt-2">BERITA SDN 013 TANJUNGPINANG BARAT</h2>
          <p>Berita Utama</p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <h3>PPDB 2023</h3>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Penerimaan Peserta Didik Baru (PPDB) Tahun Pelajaran 2023/2024. Cek Tata Cara dan Persyaratan PPDB di MENU ppdb 2023.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Admin SDN 013 TPI Barat</h3>
                      <h4>Staff IT</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/berita/ppdb.jpg" class="img-fluid testimonial-img" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <h3>Selamat Hari Guru</h3>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Terima Kasih Untuk guru-guru kami sebagai Patriot Pahlawan bangsa tanpa tanda jasa. Perjuangan dan Pengabdianmu tak akan kami lupakan
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Admin SDN 013 TPI Barat</h3>
                      <h4>Staff IT</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/berita/hari-guru.png" class="img-fluid testimonial-img" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <h3>Lomba Kreasi Siaga</h3>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        SDN 013 Tanjungpinang Barat mengadakan Lomba Kreasi Siaga yang bertujuan untuk menyaring minat bakat siswa dalam hal fashion show serta paduan suara pramuka.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Admin SDN 013 TPI Barat</h3>
                      <h4>Staff IT</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/berita/pramuka.jpg" class="img-fluid testimonial-img" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <h3>Pembagian Rapor</h3>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Apresiasi pihak sekolah terhadap siswa-siswi yang mendapatkan juara tingkat kelas. Apresiasi berupa piala dan hadiah bagi juara 1 hingga 3.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Admin SDN 013 TPI Barat</h3>
                      <h4>Staff IT</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/berita/pembagian-rapor.jpg" class="img-fluid testimonial-img" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= DATA GURU ======= -->
    <section class="chefs section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <hr id="data-guru" style="border: 1px solid red; width: 1px; height: 100px; margin: 0 auto;">
          <h2>Data Guru</h2>
          <p>Data <span>Guru</span> SDN 013 Tanjungpinang Barat</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="swiper-slide event-item col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="chef-member">
                <div class="member-img">
                  <img src="assets/img/guru/guru-perempuan.png" class="img-fluid" alt="" />
                  <div class="social">
                    <a title="twitter" href=""><i class="bi bi-twitter"></i></a>
                    <a title="facebook" href=""><i class="bi bi-facebook"></i></a>
                    <a title="instagram" href=""><i class="bi bi-instagram"></i></a>
                    <a title="linkedin" href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Afrihayati</h4>
                  <span>Guru Kelas</span>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cum quam quia, magni officiis corporis id eveniet et, hic culpa nemo repudiandae a assumenda nostrum nulla recusandae beatae mollitia quae!
                  </p>
                </div>
              </div>
            </div>
            <!-- End Chefs Member -->

            <div class="swiper-slide event-item col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="chef-member">
                <div class="member-img">
                  <img src="assets/img/guru/guru-laki.png" class="img-fluid" alt="" />
                  <div class="social">
                    <a title="twitter" href=""><i class="bi bi-twitter"></i></a>
                    <a title="facebook" href=""><i class="bi bi-facebook"></i></a>
                    <a title="instagram" href=""><i class="bi bi-instagram"></i></a>
                    <a title="linkedin" href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Alimun Akbar Siregar</h4>
                  <span>Guru Mapel</span>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cum quam quia, magni officiis corporis id eveniet et, hic culpa nemo repudiandae a assumenda nostrum nulla recusandae beatae mollitia quae!
                  </p>
                </div>
              </div>
            </div>
            <!-- End Chefs Member -->

            <div class="swiper-slide event-item col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
              <div class="chef-member">
                <div class="member-img">
                  <img src="assets/img/guru/guru-perempuan.png" class="img-fluid" alt="" />
                  <div class="social">
                    <a title="twitter" href=""><i class="bi bi-twitter"></i></a>
                    <a title="facebook" href=""><i class="bi bi-facebook"></i></a>
                    <a title="instagram" href=""><i class="bi bi-instagram"></i></a>
                    <a title="linkedin" href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Irma Nurcahyani</h4>
                  <span>Tenaga Administrasi Sekolah</span>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cum quam quia, magni officiis corporis id eveniet et, hic culpa nemo repudiandae a assumenda nostrum nulla recusandae beatae mollitia quae!
                  </p>
                </div>
              </div>
            </div>
            <!-- End Chefs Member -->
            <div class="swiper-slide event-item col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
              <div class="chef-member">
                <div class="member-img">
                  <img src="assets/img/guru/guru-laki.png" class="img-fluid" alt="" />
                  <div class="social">
                    <a title="twitter" href=""><i class="bi bi-twitter"></i></a>
                    <a title="facebook" href=""><i class="bi bi-facebook"></i></a>
                    <a title="instagram" href=""><i class="bi bi-instagram"></i></a>
                    <a title="linkedin" href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Aprillo Apollo Q.p</h4>
                  <span>Guru Mapel</span>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cum quam quia, magni officiis corporis id eveniet et, hic culpa nemo repudiandae a assumenda nostrum nulla recusandae beatae mollitia quae!
                  </p>
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End Chefs Section -->

    <!-- ======= Gallery Section ======= -->
    <section class="gallery section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <hr id="fasilitas" style="border: 1px solid red; width: 1px; height: 100px; margin: 0 auto;">
          <h2>Fasilitas</h2>
          <p>Cek <span>Fasilitas SDN 013 TPI Barat</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <a title="perpustakaan" class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/perpustakaan.jpg"><img src="assets/img/gallery/perpustakaan.jpg" class="img-fluid" alt="" /></a>
              <p class="text-center">Perpustakaan</p>
            </div>
            <div class="swiper-slide">
              <a title="uks" class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/uks.jpg"><img src="assets/img/gallery/uks.jpg" class="img-fluid" alt="" /></a>
              <p class="text-center">UKS</p>
            </div>
            <div class="swiper-slide">
              <a title="mushola" class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/mushola.jpg"><img src="assets/img/gallery/mushola.jpg" class="img-fluid" alt="" /></a>
              <p class="text-center">Mushola</p>
            </div>
            <div class="swiper-slide">
              <a title="lapangan" class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/lapangan.jpg"><img src="assets/img/gallery/lapangan.jpg" class="img-fluid" alt="" /></a>
              <p class="text-center">Lapangan</p>
            </div>
            <div class="swiper-slide">
              <a title="kelas" class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/kelas.jpg"><img src="assets/img/gallery/kelas.jpg" class="img-fluid" alt="" /></a>
              <p class="text-center">Kelas</p>
            </div>
            <div class="swiper-slide">
              <a title="papan-sekolah" class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/papan-sekolah.jpg"><img src="assets/img/gallery/papan-sekolah.jpg" class="img-fluid" alt="" /></a>
              <p class="text-center">Papan Sekolah</p>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End Gallery Section -->
  </main>
  <!-- End #main -->

  <!-- Google Map -->
  <section id="map" data-stellar-background-ratio="0.5">
    <div class="container text-center">
      <h4 class="display-6 text-center">
        Google Map <br />SD NEGERI 013 TANJUNGPINANG BARAT
      </h4>
      <div class="row">
        <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">
          <div id="google-map">
            <iframe class="googleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3166410309204!2d104.4384927302599!3d0.9086125207322081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d972f15918f419%3A0x22bec178aa6ceae3!2sSdn%20013%20Tanjungpinang%20Barat!5e0!3m2!1sid!2sid!4v1696679325835!5m2!1sid!2sid" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>ALAMAT</h4>
            <p>
              Jl. Yos Sudarso, Tanjungpinang Barat, Kota Tanjungpinang<br />
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Kontak</h4>
            <p>
              <strong>Phone:</strong> (0771) 315306<br />
              <strong>Email:</strong> sdn013_tpibarat@yahoo.co.id<br />
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Kunjungi Sosial Media untuk Informasi Lainnya</h4>
          <div class="social-links d-flex">
            <a title="facebook" href="https://www.facebook.com/profile.php?id=100068154853700" class="facebook"><i class="bi bi-facebook"></i></a>
            <a title="youtube" href="https://youtube.com/@sdn013tanjungpinangbarat2?si=ZXFFSBWgbQRcyJC2" class="youtube"><i class="bi bi-youtube"></i></a>
            <a title="whats-app" href="#" class="whats-app"><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Jam Sekolah</h4>
            <div>
              <h6 class="text-white text-uppercase">SISWA</h6>
              <p>
                - Senin-Kamis : <br />
                07.00 AM-14.30 PM
              </p>
              <p>
                - Jumat : <br />
                07.00 AM-11.00 PM
              </p>
              <h6 class="text-white text-uppercase">STAFF</h6>
              <p>
                - Senin-Kamis : <br />
                07.00 AM-15.30 PM
              </p>
              <p>
                - Jumat : <br />
                07.00 AM-11.00 PM
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SDN 013 Tanjungpinang Barat</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by MAMANG UI PROJECT
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <!-- End Footer -->

  <a title="scroll" href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script>
    const text = document.getElementById("animated-text");
    const textContent = text.innerHTML;
    text.innerHTML = "";

    for (let i = 0; i < textContent.length; i++) {
      const letterSpan = document.createElement("span");
      letterSpan.textContent = textContent[i];
      letterSpan.style.animation = `animatedText 2s infinite ${i * 0.1}s`;
      text.appendChild(letterSpan);
    }
  </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!--=============== MAIN JS ===============-->
  <script src="assets/assets/js/main.js"></script>
</body>

</html>