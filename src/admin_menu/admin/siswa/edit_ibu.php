<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_pegawai WHERE nip='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i>Ubah Data Ibu - <span style="color: blue;"><?php echo $data_cek['nama']; ?></span></h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Ibu</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nip" name="nip" value="<?php echo $data_cek['nip']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat Lahir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data_cek['no_hp']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Hp</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data_cek['no_hp']; ?>"
					/>
				</div>
			</div>

		</div>

		<div align="center" class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-siswa" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
$sumber = @$_FILES['foto']['tmp_name'];
$target = 'foto/';
$nama_file = @$_FILES['foto']['name'];
$pindah = move_uploaded_file($sumber, $target.$nama_file);

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
                        jenis_golongan='" . $_POST['jenis_golongan'] . "',
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
            jenis_golongan='" . $_POST['jenis_golongan'] . "',
            alamat_instansi='" . $_POST['alamat_instansi'] . "'
            WHERE nip='" . $_POST['nip'] . "'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
    }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'data.php?page=data-siswa';
            }
        })</script>";
    } else {
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'data.php?page=data-siswa';
            }
        })</script>";
    }
}
?>
