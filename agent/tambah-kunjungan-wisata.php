<?php 
    include 'app-atas.php'; 
    include 'config.php';
?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Tambah Kunjungan Wisata</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="data-kunjungan-wisata.php">Kunjungan Wisata</a></li>
                <li class="breadcrumb-item active">Tambah Kunjungan WIsata</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-outline-primary">
                    <div class="card-body">
                        <form action="proses-tambah-kunjungan.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
                            <div class="form-body">
                                <h3 class="card-title m-t-15">Form Kunjungan Wisata</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <select name="id_wisata" id="" class="form-control">
                                                <option value="">-- Pilih Tempat Wisata --</option>
                                                <?php 
                                                    $sql = mysqli_query($koneksi,"SELECT * FROM wisata");
                                                    while ($rows = mysqli_fetch_assoc($sql)){
                                                ?>
                                                <option value="<?= $rows['id_wisata'];?>"><?= $rows['nama'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jumlah Pengunjung</label>
                                            <input type="number" name="jumlah_kunjungan" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Waktu Kunjungan</label>
                                            <input type="date" class="form-control" name="waktu">
                                        </div>
                                        <div class="form-group">
                                            <select name="asal" id="" class="form-control">
                                                <option value="">-- Pilih Asal Pengunjung --</option>
                                                <option value="Lokal">Lokal</option>
                                                <option value="Internasional">Internasional</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-check"></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'app-bawah.php'; ?>