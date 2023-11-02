<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-table"></i> Ubah Berkas Persyaratan
            </h3>
        </div>
        <?php
        // Lakukan koneksi ke database
        $koneksi = mysqli_connect("localhost", "root", "", "ppdb_sd13");

        if (!$koneksi) {
            die("Koneksi ke database gagal: " . mysqli_connect_error());
        }

        // Periksa apakah pengguna sudah login
        if (isset($_SESSION['ses_id_login_siswa'])) {
            // Ambil ID login siswa dari sesi
            $id_login_siswa = $_SESSION['ses_id_login_siswa'];

            // Query untuk mengambil data berkas dari tabel berkas berdasarkan id_siswa
            $sql_cek = "SELECT * FROM berkas WHERE id_siswa = $id_login_siswa";
            $query_cek = mysqli_query($koneksi, $sql_cek);

            // Periksa apakah data berkas ditemukan
            if (mysqli_num_rows($query_cek) > 0) {
                $data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);

                // Sekarang Anda memiliki data berkas untuk pengguna yang sedang login
                // Anda dapat menampilkan data ini sesuai kebutuhan
        ?>
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-edit"></i>Ubah Berkas Persyaratan
                        </h3>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <!-- Menampilkan foto KTP -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Berkas KTP</label>
                                <div class="col-sm-6">
                                    <img src="foto/<?php echo $data_cek['ktp']; ?>" width="160px" />
                                </div>
                            </div>

                            <!-- Mengunggah ulang foto KTP -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ubah Berkas KTP</label>
                                <div class="col-sm-6">
                                    <input type="file" id="ktp" name="ktp">
                                    <p class="help-block">
                                        <font color="red">"Format file Jpg/Png"</font>
                                    </p>
                                </div>
                            </div>

                            <!-- Menampilkan foto Kartu Keluarga -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Berkas Kartu Keluarga</label>
                                <div class="col-sm-6">
                                    <img src="foto/<?php echo $data_cek['kartu_keluarga']; ?>" width="160px" />
                                </div>
                            </div>

                            <!-- Mengunggah ulang foto Kartu Keluarga -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ubah Berkas KK</label>
                                <div class="col-sm-6">
                                    <input type="file" id="kk" name="kk">
                                    <p class="help-block">
                                        <font color="red">"Format file Jpg/Png"</font>
                                    </p>
                                </div>
                            </div>

                            <!-- Menampilkan foto Akta Lahir -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Berkas Akta Lahir</label>
                                <div class="col-sm-6">
                                    <img src="foto/<?php echo $data_cek['akta_lahir']; ?>" width="160px" />
                                </div>
                            </div>

                            <!-- Mengunggah ulang foto Akta Lahir -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ubah Berkas Akta Lahir</label>
                                <div class="col-sm-6">
                                    <input type="file" id="akta_lahir" name="akta_lahir">
                                    <p class="help-block">
                                        <font color="red">"Format file Jpg/Png"</font>
                                    </p>
                                </div>
                            </div>

                            <!-- Menampilkan foto Pas Foto -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Berkas Pas Foto</label>
                                <div class="col-sm-6">
                                    <img src="foto/<?php echo $data_cek['pas_foto']; ?>" width="160px" />
                                </div>
                            </div>

                            <!-- Mengunggah ulang foto Pas Foto -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ubah Berkas Pas Foto</label>
                                <div class="col-sm-6">
                                    <input type="file" id="pas_foto" name="pas_foto">
                                    <p class="help-block">
                                        <font color="red">"Format file Jpg/Png"</font>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
                            <a href="?page=data-berkas" title="Kembali" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
        <?php
                // ...
                // Formulir "Ubah Berkas Persyaratan" telah ditampilkan
                // ...

            } else {
                // Tampilkan pesan jika tidak ada data berkas yang ditemukan
                echo '<br><p align="center">Data Berkas Tidak Ditemukan <br></p>';
                echo '<p align="center">Pastikan Anda Mengisi Berkas Persyaratan pada Menu Upload Berkas <br></p>';
                echo '<div class="mb-2" align="center">
                            <a href="?page=data-berkas-berkas" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Upload Berkas </a>
                        </div>';
            }
        } else {
            // Tampilkan pesan atau alihkan ke halaman login jika pengguna belum login
            echo 'Anda harus login terlebih dahulu atau Anda tidak memiliki akses.';
            // Contoh alihkan ke halaman login:
            // header("Location: login.php");
        }
        ?>
    </div>
</body>

</html>