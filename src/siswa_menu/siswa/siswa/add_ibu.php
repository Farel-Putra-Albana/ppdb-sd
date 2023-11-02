<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Siswa Menu || SDN 013 Tanjungpinang Barat</title>

	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">
				<i class="fa fa-edit"></i> Input Biodata Ibu
			</h3>
		</div>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="card-body">

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Ibu</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Alamat Ibu</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="alamat_ibu" name="alamat_ibu" placeholder="Masukkan Alamat Ibu" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tempat Lahir</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="tempat_lahir_ibu" name="tempat_lahir_ibu" placeholder="Masukkan Tempat Lahir Ibu" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
					<div class="col-sm-5">
						<input type="date" class="form-control" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" placeholder="Masukkan Tanggal Lahir Ibu" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">No Hp Ibu</label>
					<div class="col-sm-5">
						<input type="number" class="form-control" id="no_hp_ibu" name="no_hp_ibu" placeholder="Masukkan No Hp Ibu" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Pendidikan Terakhir Ibu</label>
					<div class="col-sm-5">
						<input type="number" class="form-control" id="pend_terakhir_ibu" name="pend_terakhir_ibu" placeholder="Masukkan Pendidikan Terakhir Ibu" required>
					</div>
				</div>

			</div>
			<div class="card-footer">
				<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
				<a href="?page=data-ibu" title="Batal" class="btn btn-secondary">Batal</a>
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
