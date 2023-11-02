<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * FROM tb_pegawai WHERE nip='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.form-control .status-oren {
			color: orange;
		}

		.form-control .status-merah {
			color: red;
		}

		.form-control .status-hijau {
			color: green;
		}
	</style>
</head>

<body>
	<div class="card card-success">
		<div class="card-header">
			<h3 class="card-title">
				<i class="fa fa-edit"></i>Verifikasi Pendaftaran Ulang
			</h3>
		</div>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="card-body">

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">NIK Siswa</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="nip" name="nip" value="<?php echo $data_cek['nip']; ?>" readonly />
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Siswa</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>" readonly />
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tempat Lahir</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>" readonly />
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
					<div class="col-sm-5">
						<input type="date" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>" readonly />
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>" readonly />
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data_cek['no_hp']; ?>" readonly />
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Agama</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data_cek['no_hp']; ?>" readonly />
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Anak Ke-</label>
					<div class="col-sm-1">
						<input type="number" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data_cek['no_hp']; ?>" readonly />
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jumlah Saudara</label>
					<div class="col-sm-1">
						<input type="number" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data_cek['no_hp']; ?>" readonly />
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Status</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="status" name="status" value="<?php echo $data_cek['status']; ?>" readonly />
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Foto Siswa</label>
					<div class="col-sm-6">
						<img src="foto/<?php echo $data_cek['foto']; ?>" width="160px" />
					</div>
				</div>

				<?php
				$sql = $koneksi->query("SELECT * from tb_pegawai");
				$data = $sql->fetch_assoc(); {
				?>

					<div class="form-group row justify-content-center align-items-center">
						<a href="?page=biodata-ayah&kode=<?php echo $data['nip']; ?>" title="Biodata Ayah" class="btn btn-info" style="margin-right: 10px;">Lihat Biodata Ayah</a>
						<a href="?page=biodata-ibu&kode=<?php echo $data['nip']; ?>" title="Biodata Ibu" class="btn btn-info">Lihat Biodata Ibu</a>
					</div>

				<?php
				}
				?>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label text-danger">Status Verifikasi</label>
					<div class="col-sm-4">
						<select name="status" id="status" class="form-control">
							<?php
							$selectedStatus = isset($data_cek['status']) ? $data_cek['status'] : "Belum di Verifikasi";

							$options = [
								"Belum di Verifikasi" => "status-oren",
								"Berhasil di Verifikasi" => "status-hijau",
								"Verifikasi ditolak" => "status-merah"
							];

							foreach ($options as $value => $class) {
								$selected = $selectedStatus == $value ? 'selected' : '';
								echo "<option value='$value' $selected class='$class'>$value</option>";
							}
							?>
						</select>
					</div>
				</div>


			</div>

			<div class="card-footer">
				<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
				<a href="?page=hasil-verifikasi" title="Kembali" class="btn btn-secondary">Batal</a>
			</div>
		</form>
	</div>

	<?php
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = 'foto/';
	$nama_file = @$_FILES['foto']['name'];
	$pindah = move_uploaded_file($sumber, $target . $nama_file);

	if (isset($_POST['Ubah'])) {
		if (!empty($sumber)) {
			$foto = $data_cek['foto'];
			if (file_exists("foto/$foto")) {
				unlink("foto/$foto");
			}

			$sql_ubah = "UPDATE tb_pegawai SET
                        nama='" . $_POST['nama'] . "',
                        alamat='" . $_POST['alamat'] . "',
                        no_hp='" . $_POST['no_hp'] . "',
                        status='" . $_POST['status'] . "',
                        jabatan='" . $_POST['jabatan'] . "',
                        jenis_verifikasi='" . $_POST['jenis_verifikasi'] . "',
                        alamat_instansi='" . $_POST['alamat_instansi'] . "',
                        foto='" . $nama_file . "'
            WHERE nip='" . $_POST['nip'] . "'";
			$query_ubah = mysqli_query($koneksi, $sql_ubah);
		} elseif (empty($sumber)) {
			$sql_ubah = "UPDATE tb_pegawai SET
            nama='" . $_POST['nama'] . "',
            alamat='" . $_POST['alamat'] . "',
            no_hp='" . $_POST['no_hp'] . "',
            status='" . $_POST['status'] . "',
            jabatan='" . $_POST['jabatan'] . "',
            jenis_verifikasi='" . $_POST['jenis_verifikasi'] . "',
            alamat_instansi='" . $_POST['alamat_instansi'] . "'
            WHERE nip='" . $_POST['nip'] . "'";
			$query_ubah = mysqli_query($koneksi, $sql_ubah);
		}

		if ($query_ubah) {
			echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'data.php?page=hasil-verifikasi';
            }
        })</script>";
		} else {
			echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'data.php?page=hasil-verifikasi';
            }
        })</script>";
		}
	}
	?>
</body>

</html>