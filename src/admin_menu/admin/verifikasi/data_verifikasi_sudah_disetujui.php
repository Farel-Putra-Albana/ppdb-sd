<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-table"></i> Proses Verifikasi Berkas Sudah Disetujui
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <br>
            <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK Siswa</th>
                        <th>Nama Siswa</th>
                        <th>Lihat Berkas</th>
                        <th>Verifikasi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $no = 1;
                    $sql = $koneksi->query("SELECT biodata_siswa.*, berkas.*, hasil_seleksi.* FROM biodata_siswa
                        LEFT JOIN berkas ON biodata_siswa.id_siswa = berkas.id_siswa
                        LEFT JOIN hasil_seleksi ON biodata_siswa.id_siswa = hasil_seleksi.id_siswa");
                    while ($data = $sql->fetch_assoc()) {
                        // Cek jika status_penerimaan adalah "Sudah di Setujui"
                        if ($data['status_penerimaan'] === "Sudah di Setujui") {
                    ?>

                        <tr>
                            <td>
                                <?php echo $no++; ?>
                            </td>
                            <td>
                                <?php echo $data['nik_siswa']; ?>
                            </td>
                            <td>
                                <?php echo $data['nama_siswa']; ?>
                            </td>
                            <td align="center">
                                <a href="?page=view-berkas-sudah&kode=<?php echo $data['id_berkas']; ?>" title="Detail" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>
                            <td align="center">
                                <a href="?page=hasil-verifikasi&kode=<?php echo $data['id_siswa']; ?>" title="Ubah" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                        </tr>

                    <?php
                        }
                    }
                    // Cek jika tidak ada data
                    if ($no === 1) {
                        echo '<div class="row text-center">';
                        echo '<div align="center" class="col-md-8 mx-auto">';
                        echo '<div class="card card-info">';
                        echo '<div class="card-header">';
                        echo '<h3 class="card-title">Detail Proses Verifikasi</h3>';
                        echo '<div class="card-tools"></div>';
                        echo '</div>';
                        echo '<div class="card-body">';
                        echo '<p>Data Verifikasi Sudah di Setujui tidak ditemukan. Silakan kembali ke halaman sebelumnya.</p>';
                        echo '</div>';
                        echo '<div class="card-footer">';
                        echo '<a href="?page=proses-verifikasi" class="btn btn-warning">Kembali</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </tbody>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
</div>