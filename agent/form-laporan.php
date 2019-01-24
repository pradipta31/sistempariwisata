<?php 
    include 'app-atas.php'; 
    include 'config.php';
    $id = $_GET['id_kunjungan'];
    $query = "SELECT * FROM kunjungan WHERE id_kunjungan='$id'";
    $hasil = mysqli_query($koneksi,$query);
    $rowss = mysqli_fetch_array($hasil);
?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Tambah Laporan Kunjungan Wisata</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="data-laporan.php">Laporan Kunjungan Wisata</a></li>
                <li class="breadcrumb-item active">Tambah Laporan Kunjungan WIsata</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-outline-primary">
                    <div class="card-body">
                        <form action="proses-tambah-laporan.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
                        <input type="hidden" name="id_kunjungan" value="<?php echo $id; ?>">
                            <div class="form-body">
                                <h3 class="card-title m-t-15">Form Tambah Laporan Kunjungan Wisata</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label for="">Judul</label>
                                            <input type="text" name="judul" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <select name="id_wisata" id="" class="form-control" value="<?= $rowss['id_wisata'];?>">
                                                <option value="">-- Pilih Tempat Wisata --</option>
                                                <?php 
                                                    $sql = mysqli_query($koneksi,"SELECT * FROM wisata");
                                                    while ($rows = mysqli_fetch_assoc($sql)){
                                                ?>
                                                <option value="<?= $rows['id_wisata'];?>" <?= ($rowss['id_wisata'] == $rows['id_wisata']) ? 'selected' : '' ; ?>><?= $rows['nama'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jumlah Pengunjung</label>
                                            <input type="number" name="jumlah_kunjungan" class="form-control" value="<?= $rowss['jumlah_kunjungan'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Waktu Kunjungan</label>
                                            <input type="date" class="form-control" name="waktu" value="<?= $rowss['waktu'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Asal Pengunjung</label>
                                            <select class="form-control" name="asal" value="<?php echo $rowss['asal'];?>">
                                                <option value="Lokal" <?= ($rowss['asal'] == 'Lokal') ? 'selected' : '' ; ?>>Lokal</option>
                                                <option value="Internasional" <?= ($rowss['asal'] == 'Internasional') ? 'selected' : '' ; ?>>Internasional</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Deskripsi</label>
                                            <textarea name="deskripsi" class="form-control" style="height: 150px"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-check"></i> Simpan</button>
                                <a href="data-kunjungan-wisata.php" class="btn btn-inverse">  Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'app-bawah.php'; ?>