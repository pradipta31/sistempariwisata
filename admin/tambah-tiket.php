<?php 
    include 'app-atas.php'; 
    include 'config.php';
?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Tambah Tiket Wisata</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="data-kunjungan-wisata.php">Tiket Wisata</a></li>
                <li class="breadcrumb-item active">Tiket Kunjungan WIsata</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-outline-primary">
                    <div class="card-body">
                        <form action="proses-tambah-tiket.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
                            <div class="form-body">
                                <h3 class="card-title m-t-15">Form Tiket Wisata</h3>
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
                                            <select name="jenis_tiket" id="" class="form-control">
                                                <option value="">-- Pilih Jenis Tiket --</option>
                                                <option value="domestik">Domestik</option>
                                                <option value="internasional">Internasional</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jumlah Tiket</label>
                                            <input type="text" name="jumlah" class="form-control" placeholder="Kosongkan jika tidak perlu tiket">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Harga 1 Tiket</label>
                                            <input type="number" name="harga" class="form-control" placeholder="Misal 150000 ..">
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