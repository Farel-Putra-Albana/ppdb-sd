<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        thead .tabel {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .tabel-aksi {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-table"></i> Data Siswa
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="table-responsive">
                <br>
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="tabel">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Foto</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Biodata Ayah</th>
                            <th>Biodata Ibu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">

                        <?php
                        $no = 1;
                        $sql = $koneksi->query("SELECT biodata_siswa.*, biodata_ayah.*, biodata_ibu.*, berkas.pas_foto FROM biodata_siswa
                            LEFT JOIN biodata_ayah ON biodata_siswa.id_siswa = biodata_ayah.id_siswa
                            LEFT JOIN biodata_ibu ON biodata_siswa.id_siswa = biodata_ibu.id_siswa
                            LEFT JOIN berkas ON biodata_siswa.id_siswa = berkas.id_siswa");

                        while ($data = $sql->fetch_assoc()) {
                        ?>

                            <tr>
                                <td>
                                    <?php echo $no++; ?>
                                </td>
                                <td align="center">
                                    <img src="/ppdb-sd/src/siswa_menu/foto/<?php echo $data['pas_foto']; ?>" width="70px" />
                                </td>
                                <td>
                                    <?php echo $data['nik_siswa']; ?>
                                </td>
                                <td>
                                    <?php echo $data['nama_siswa']; ?>
                                </td>
                                <td>
                                    <?php echo $data['tempat_lahir_siswa']; ?>
                                </td>
                                <td>
                                    <?php echo $data['jk_siswa']; ?>
                                </td>

                                <div class="tabel-aksi">
                                    <!-- Biodata Ayah -->
                                    <td>
                                        <a href="?page=view-ayah&kode=<?php echo $data['id_ayah']; ?>" title="Detail" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        </a>
                                        <a href="?page=edit-ayah&kode=<?php echo $data['id_ayah']; ?>" title="Ubah" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                    <!-- Biodata Ibu -->
                                    <td>
                                        <a href="?page=view-ibu&kode=<?php echo $data['id_ibu']; ?>" title="Detail" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        </a>
                                        <a href="?page=edit-ibu&kode=<?php echo $data['id_ibu']; ?>" title="Ubah" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                    <!-- Aksi Biodata -->
                                    <td>
                                        <a href="?page=view-siswa&kode=<?php echo $data['id_siswa']; ?>" title="Detail" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        </a>
                                        <a href="?page=edit-siswa&kode=<?php echo $data['id_siswa']; ?>" title="Ubah" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="?page=del-siswa&kode=<?php echo $data['id_siswa']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                    </td>
                                </div>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                    </tfoot>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
</body>

</html>