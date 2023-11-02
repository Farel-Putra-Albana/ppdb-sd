<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Siswa Menu || SDN 013 Tanjungpinang Barat</title>

	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">
				<i class="fa fa-edit"></i> Input Biodata Ayah
			</h3>
		</div>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="card-body">

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Ayah</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama Ayah" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Alamat Ayah</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="alamat_ayah" name="alamat_ayah" placeholder="Masukkan Alamat Ayah" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tempat Lahir</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="tempat_lahir_ayah" name="tempat_lahir_ayah" placeholder="Masukkan Tempat Lahir Ayah" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
					<div class="col-sm-5">
						<input type="date" class="form-control" id="tanggal_lahir_ayah" name="tanggal_lahir_ayah" placeholder="Masukkan Tanggal Lahir Ayah" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">No Hp Ayah</label>
					<div class="col-sm-5">
						<input type="number" class="form-control" id="no_hp_ayah" name="no_hp_ayah" placeholder="Masukkan No Hp Ayah" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Pendidikan Terakhir Ayah</label>
					<div class="col-sm-5">
						<input type="number" class="form-control" id="pend_terakhir_ayah" name="pend_terakhir_ayah" placeholder="Masukkan Pendidikan Terakhir Ayah" required>
					</div>
				</div>

			</div>
			<div class="card-footer">
				<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
				<a href="?page=data-ayah" title="Batal" class="btn btn-secondary">Batal</a>
			</div>
		</form>
	</div>

	<?php
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = 'foto/';
	$nama_file = @$_FILES['foto']['name'];
	$pindah = move_uploaded_file($sumber, $target . $nama_file);

	if (isset($_POST['Simpan'])) {


		if (!empty($sumber)) {
			$sql_simpan = "INSERT INTO tb_pegawai (nip, nama, alamat, no_hp, status, jabatan, jenis_golongan, alamat_instansi, foto) VALUES (
            '" . $_POST['nip'] . "',
						'" . $_POST['nama'] . "',
						'" . $_POST['alamat'] . "',
						'" . $_POST['no_hp'] . "',
						'" . $_POST['status'] . "',
						'" . $_POST['jabatan'] . "',
						'" . $_POST['jenis_golongan'] . "',
						'" . $_POST['alamat_instansi'] . "',
            '" . $nama_file . "')";
			$query_simpan = mysqli_query($koneksi, $sql_simpan);
			mysqli_close($koneksi);

			if ($query_simpan) {
				echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'data.php?page=data-guru';
          }
      })</script>";
			} else {
				echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'data.php?page=add-guru';
          }
      })</script>";
			}
		} elseif (empty($sumber)) {
			echo "<script>
		Swal.fire({title: 'Gagal, Foto Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {
			if (result.value) {
				window.location = 'data.php?page=add-guru';
			}
		})</script>";
		}
	}
  //selesai proses simpan data
