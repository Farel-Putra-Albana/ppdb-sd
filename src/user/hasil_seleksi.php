<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Website Resmi SDN 013 Tanjungpinang Barat</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="../style/img/logo.png" rel="icon" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Tambahkan tag script ini ke dalam bagian <head> file HTML Anda -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

  <!-- Vendor CSS Files -->
  <link href="../style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../style/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="../style/vendor/aos/aos.css" rel="stylesheet" />
  <link href="../style/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="../style/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="../style/style.css" rel="stylesheet" />
  <style>
    .pengumuman {
      color: #278194;
      font-size: 40px;
      font-weight: 700;
    }

    .tulisan-bawah {
      font-size: 20px;
      font-family: 'Times New Roman', Times, serif;
    }

    .btn-kotak {
      border-radius: 20px;
      padding: 5px 15px;
      color: white;
      background-color: blue;
    }

    /* Animasi Tulisan Mengetik */
    @keyframes typing {
      from {
        width: 0;
      }

      to {
        width: 100%;
      }
    }

    .animated-text1 {
      overflow: hidden;
      white-space: nowrap;
      animation: typing 3s steps(40) infinite alternate;
      color: blue;
    }

    .animated-text1::after {
      content: "|";
      display: inline-block;
      animation: blink 0.7s infinite;
      color: whitesmoke;
    }

    @keyframes blink {

      0%,
      100% {
        opacity: 1;
      }

      50% {
        opacity: 0;
      }
    }

    .kotak {
      width: 20rem;
    }
  </style>
</head>

<body>

  <?php
  include('../inc/koneksi.php');
  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="/index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="../style/img/logo.png" alt="Logo" class="logo-img" />
        <h1 class="m-0 sdn">
          <span class="smkne">SD NE</span>
          <span class="geri">GERI 013</span>
          <br />
          <span class="tanjung">TANJUNG</span>
          <span class="pinang">PINANG</span>
          <span class="barat">BARAT</span>
        </h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/ppdb-sd/index.php">Home</a></li>
          <li class="dropdown">
            <a href="/ppdb-sd/index.php"><span>Profil</span>
              <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/ppdb-sd/index.php">Visi dan Misi</a></li>
              <li><a href="/ppdb-sd/index.php">Tata Tertib</a></li>
              <li class="dropdown">
                <a href="#"><span>Sumberdaya</span>
                  <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="/ppdb-sd/index.php">Data Kepala Sekolah</a></li>
                  <li><a href="/ppdb-sd/index.php">Data Guru</a></li>
                  <li><a href="/ppdb-sd/index.php">Fasilitas Sekolah</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#"><span>PPDB 2023</span>
              <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="petunjuk_teknis.php">Petunjuk Teknis</a></li>
              <li><a href="/ppdb-sd/src/login_siswa/index.php">Pendaftaran Ulang</a></li>
              <li><a href="/ppdb-sd/src/user/hasil_seleksi.php">Pengumuman Hasil Seleksi</a></li>
            </ul>
          </li>
          <li><a href="/index.php">Berita</a></li>
          <li><a href="#footer">Informasi Resmi</a></li>
          <li><a href="/ppdb-sd/src/admin_menu/login.php">Admin Menu</a></li>
        </ul>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- Carousel Start -->
  <div id="header" class="container-fluid p-0 mb-5">
    <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="../style/img/background.png" alt="Image" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center carousel-caption">
            <h1 id="animated-text1" class="display-1 text-white m-0 animated-text1 bg-danger">- PENGUMUMAN HASIL SELEKSI -</h1>
            <h2 class="text-white m-0">Selamat bergabung di SDN 013 Tanjungpinang Barat. Kami berharap anda merasa nyaman dan terinspirasi di sekolah ini.</h2>
            <a href="#cek-hasil" class="btn btn-kotak mt-3">CEK HASIL SELEKSI</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- Pengumuman Hasil Seleksi -->
  <div class="container-fluid mt-4">
    <h2 class="pengumuman text-center fw-bold" id="cek-hasil">PENGUMUMAN</h2>
    <h4 class="tulisan-bawah ml-3 text-center">Informasi hasil pengumuman pendaftaran PPDB Online SDN 013 Tanjungpinang Barat tahun Ajaran 2023/2024. Hasil Pengumuman dapat terus berubah sampai batas waktu pendaftaran berakhir sesuai jadwal yang telah ditetapkan.</h4>
    <h6 class="mt-5 ml-3"><b>Search</b></h6>
    <div class="input-group mb-4 mt-3">
      <div class="form-outline kotak ml-3">
        <input placeholder="Masukkan NIK Siswa" type="text" id="getName" class="form-control text-center">
      </div>
    </div>
    <!-- Tabel -->
    <table class="table">
      <thead>
        <tr class="text-center">
          <th>NIK Siswa</th>
          <th>Nama Siswa</th>
          <th>Jenis Kelamin</th>
          <th>Tanggal Penerimaan</th>
          <th>Jalur Penerimaan</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody id="showdata" class="text-center">
        <?php
        include('../inc/koneksi.php');

        $sql = "SELECT biodata_siswa.id_siswa, biodata_siswa.nik_siswa, biodata_siswa.nama_siswa, biodata_siswa.jk_siswa, hasil_seleksi.tgl_penerimaan, hasil_seleksi.jalur_penerimaan, hasil_seleksi.status_penerimaan FROM biodata_siswa LEFT JOIN hasil_seleksi ON biodata_siswa.id_siswa = hasil_seleksi.id_siswa ORDER BY biodata_siswa.nik_siswa ASC";

        $query = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($query) > 0) {
          while ($row = mysqli_fetch_assoc($query)) {
            $statusClass = '';
            if ($row['status_penerimaan'] == 'Sudah di Setujui') {
              $statusClass = 'table-success';
            } elseif ($row['status_penerimaan'] == 'Tidak di Setujui') {
              $statusClass = 'table-danger';
            } else {
              $statusClass = 'table-warning';
            }
            echo "<tr class='$statusClass'>";
            echo "<td><h6>" . $row['nik_siswa'] . "</h6></td>";
            echo "<td><h6>" . $row['nama_siswa'] . "</h6></td>";
            echo "<td><h6>" . $row['jk_siswa'] . "</h6></td>";
            if ($row['tgl_penerimaan']) {
              echo "<td><h6>" . $row['tgl_penerimaan'] . "</h6></td>";
            } else {
              echo "<td><h6>-</h6></td>";
            }
            if ($row['jalur_penerimaan']) {
              echo "<td><h6>" . $row['jalur_penerimaan'] . "</h6></td>";
            } else {
              echo "<td><h6>-</h6></td>";
            }
            if ($row['status_penerimaan']) {
              echo "<td><h6>" . $row['status_penerimaan'] . "</h6></td>";
            } else {
              echo "<td><h6>Belum di Setujui</h6></td>";
            }
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='6'>DATA TIDAK DITEMUKAN</td></tr>";
          echo "<tr><td colspan='6'>SILAHKAN MASUKKAN NIK SISWA YANG SESUAI</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- Pengumuman Hasil Seleksi -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer mt-5">
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
        Designed by Kelompok 1 - Perancangan dan Implementasi Perangkat Lunak
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <!-- End Footer -->

  <!-- Template Javascript -->
  <script src="../style/js/main.js"></script>

  <script>
    $(document).ready(function() {
      $('#getName').on("keyup", function() {
        var getName = $(this).val();
        $.ajax({
          method: 'POST',
          url: 'searchajax.php', // Pastikan ini sesuai dengan path ke file searchajax.php
          data: {
            nik_siswa: getName
          },
          success: function(response) {
            $("#showdata").html(response); // Isi hasil pencarian ke dalam elemen dengan id "showdata"
          }
        });
      });
    });
  </script>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/tempusdominus/js/moment.min.js"></script>
  <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

</body>

</html>