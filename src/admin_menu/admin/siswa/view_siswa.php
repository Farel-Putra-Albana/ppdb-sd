<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * from tb_pegawai WHERE nip='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Siswa</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 180px">
								<b>NIK</b>
							</td>
							<td>:
								<?php echo $data_cek['nip']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 180px">
								<b>Nama Siswa</b>
							</td>
							<td>:
								<?php echo $data_cek['nama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 180px">
								<b>Tempat Lahir</b>
							</td>
							<td>:
								<?php echo $data_cek['nama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 180px">
								<b>Tanggal Lahir</b>
							</td>
							<td>:
								<?php echo $data_cek['nama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 180px">
								<b>Alamat</b>
							</td>
							<td>:
								<?php echo $data_cek['alamat']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 180px">
								<b>Jenis Kelamin</b>
							</td>
							<td>:
								<?php echo $data_cek['alamat']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 180px">
								<b>Agama</b>
							</td>
							<td>:
								<?php echo $data_cek['no_hp']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 180px">
								<b>Anak Ke-</b>
							</td>
							<td>:
								<?php echo $data_cek['status']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 180px">
								<b>Jumlah Saudara</b>
							</td>
							<td>:
								<?php echo $data_cek['jabatan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 180px">
								<b>Status</b>
							</td>
							<td>:
								<?php echo $data_cek['jenis_golongan']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-siswa" class="btn btn-warning">Kembali</a>

					<a href="./report/cetak-pegawai.php?nip=<?php echo $data_cek['nip']; ?>" target=" _blank" title="Cetak Data Siswa" class="btn btn-primary">Print</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">
				<center>
					<h3 class="card-title">
						Foto Siswa
					</h3>
				</center>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
					<img src="foto/<?php echo $data_cek['foto']; ?>" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					<b class="text-danger">NAMA SISWA</b> <br>
					<?php echo $data_cek['nama']; ?>
				</h3>
			</div>
		</div>
	</div>

</div>