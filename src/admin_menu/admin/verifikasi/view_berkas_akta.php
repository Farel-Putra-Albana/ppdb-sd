<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * from tb_pegawai WHERE nip='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		/* CSS untuk popup */
		.popup {
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.7);
			z-index: 1;
			text-align: center;
		}

		.popup-content {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: #fff;
			padding: 20px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
			max-width: 80vh;
		}
	</style>
</head>
</style>
</head>

<body>
	<div class="row text-center">

		<div align="center" class="col-md-8 mx-auto">
			<div class="card card-info">
				<div class="card-header">
					<h3 align="center" class="card-title">Berkas AKTA Lahir - <span style="color: blue;"><?php echo $data_cek['nama']; ?></span></h3>
				</div>
				<div class="card-body p-0">
					<div class="card card-success">
						<div class="mt-2">
							<img id="zoom-image" src="foto/<?php echo $data_cek['foto']; ?>" width="280px" onclick="openPopup()">
						</div>

						<div id="image-popup" class="popup">
							<div class="popup-content">
								<span onclick="closePopup()" style="position: absolute; top: 10px; right: 10px; cursor: pointer;">&times;</span>
								<img id="popup-image" style="max-width: 100%; max-height: 100%;" />
							</div>
						</div>
						<div class="card-footer">
							<a href="?page=data-verifikasi" class="btn btn-warning">Kembali</a>
						</div>
					</div>
				</div>
			</div>

		</div>
</body>

<script>
	function openPopup() {
		document.getElementById('popup-image').src = document.getElementById('zoom-image').src;
		document.getElementById('image-popup').style.display = "block";
	}

	function closePopup() {
		document.getElementById('image-popup').style.display = "none";
	}

	// Menutup popup saat mengklik di luar gambar di seluruh layar
	window.onclick = function(event) {
		var popup = document.getElementById('image-popup');
		if (event.target == popup) {
			closePopup();
		}
	}
</script>

</html>