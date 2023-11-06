<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * FROM data_guru WHERE id_guru='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Guru
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIP</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nip_guru" name="nip_guru" value="<?php echo $data_cek['nip_guru']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Guru</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_guru" name="nama_guru" value="<?php echo $data_cek['nama_guru']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat Lahir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="tempat_lahir_guru" name="tempat_lahir_guru" value="<?php echo $data_cek['alamat_guru']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" id="tgl_lahir_guru" name="tgl_lahir_guru" value="<?php echo $data_cek['tgl_lahir_guru']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="alamat_guru" name="alamat_guru" value="<?php echo $data_cek['alamat_guru']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-4">
					<select name="jk_guru" id="jk_guru" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
						//cek data yg dipilih sebelumnya
						if ($data_cek['jk_guru'] == "Laki-Laki") echo "<option value='Laki-Laki' selected>Laki-Laki</option>";
						else echo "<option value='Laki-Laki'>Laki-Laki</option>";

						if ($data_cek['jk_guru'] == "Perempuan") echo "<option value='Perempuan' selected>Perempuan</option>";
						else echo "<option value='Perempuan'>Perempuan</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No HP</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_hp_guru" name="no_hp_guru" value="<?php echo $data_cek['no_hp_guru']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Kepegawaian</label>
				<div class="col-sm-4">
					<select name="status_kepegawaian" id="status_kepegawaian" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
						//cek data yg dipilih sebelumnya
						if ($data_cek['status_kepegawaian'] == "Pegawai") echo "<option value='Pegawai' selected>Pegawai</option>";
						else echo "<option value='Pegawai'>Pegawai</option>";

						if ($data_cek['status_kepegawaian'] == "PPPK") echo "<option value='PPPK' selected>PPPK</option>";
						else echo "<option value='PPPK'>PPPK</option>";

						if ($data_cek['status_kepegawaian'] == "Honorer") echo "<option value='Honorer' selected>Honorer</option>";
						else echo "<option value='Honorer'>Honorer</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jurusan/Prodi</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jurusan_guru" name="jurusan_guru" value="<?php echo $data_cek['jurusan_guru']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kompetensi</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kompetensi_guru" name="kompetensi_guru" value="<?php echo $data_cek['kompetensi_guru']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Foto</label>
				<div class="col-sm-6">
					<img src="foto/<?php echo $data_cek['foto_guru']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah Foto</label>
				<div class="col-sm-6">
					<input type="file" id="foto_guru" name="foto_guru">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-guru" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
if (isset($_POST['Ubah'])) {
	// Periksa apakah ada file foto yang diunggah
	if (!empty($_FILES['foto_guru']['tmp_name'])) {
			$foto = $data_cek['foto_guru'];
			
			// Hapus file foto lama
			if (file_exists("foto/$foto")) {
					unlink("foto/$foto");
			}
			
			$nip_guru = mysqli_real_escape_string($koneksi, $_POST['nip_guru']);
			$nama_guru = mysqli_real_escape_string($koneksi, $_POST['nama_guru']);
			$tempat_lahir_guru = mysqli_real_escape_string($koneksi, $_POST['tempat_lahir_ayah']);
			$tgl_lahir_guru = $_POST['tgl_lahir_guru'];
			$alamat_guru = mysqli_real_escape_string($koneksi, $_POST['alamat_guru']);
			$jk_guru = mysqli_real_escape_string($koneksi, $_POST['jk_guru']);
			$no_hp_guru = $_POST['no_hp_guru'];
			$status_kepegawaian = mysqli_real_escape_string($koneksi, $_POST['status_kepegawaian']);
			$jurusan_guru = $_POST['jurusan_guru'];
			$kompetensi_guru = mysqli_real_escape_string($koneksi, $_POST['kompetensi_guru']);
			

			// Perbarui data guru dengan foto yang baru
			$sql_ubah = "UPDATE data_guru SET
												nip_guru='$nip_guru',
												nama_guru='$nama_guru',
												tempat_lahir_guru='$tempat_lahir_guru',
                        tgl_lahir_guru='$tgl_lahir_guru',
                        alamat_guru='$alamat_guru',
												jk_guru='$jk_guru',
                        no_hp_guru='$no_hp_guru',
                        status_kepegawaian='$status_kepegawaian',
												jurusan_guru='$jurusan_guru',
                        kompetensi_guru='$kompetensi_guru'
                    WHERE id_siswa='$id_login_siswa'";
	} else {
			// Jika tidak ada file foto yang diunggah, perbarui data guru tanpa mengubah foto
			$sql_ubah = "UPDATE data_guru SET
												nip_guru='$nip_guru',
												nama_guru='$nama_guru',
                        alamat_guru='$alamat_guru',
                        tgl_lahir_guru='$tgl_lahir_guru',
                        tempat_lahir_guru='$tempat_lahir_guru',
												jk_guru='$jk_guru',
                        no_hp_guru='$no_hp_guru',
                        status_kepegawaian='$status_kepegawaian',
												jurusan_guru='$jurusan_guru',
                        kompetensi_guru='$kompetensi_guru'
                    WHERE id_siswa='$id_login_siswa'";
	}

	// Eksekusi query UPDATE
	$query_ubah = mysqli_query($koneksi, $sql_ubah);

	if ($query_ubah) {
			echo "<script>
					Swal.fire({title: 'Ubah Data Berhasil', text: '', icon: 'success', confirmButtonText: 'OK'
					}).then((result) => {
							if (result.value) {
									window.location = 'data.php?page=data-guru';
							}
					})</script>";
	} else {
			echo "<script>
					Swal.fire({title: 'Ubah Data Gagal', text: '', icon: 'error', confirmButtonText: 'OK'
					}).then((result) => {
							if (result.value) {
									window.location = 'data.php?page=data-guru';
							}
					})</script>";
	}
}
?>