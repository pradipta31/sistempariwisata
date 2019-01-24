<?php 
    include 'app-atas.php'; 
    include 'config.php';
    $id = $_GET['id_tiket'];
    $query = "SELECT * FROM tiket WHERE id_tiket='$id'";
    $hasil = mysqli_query($koneksi,$query);
    $rowss = mysqli_fetch_array($hasil);
?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Edit Tiket Wisata</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="data-tiket.php">Tiket Wisata</a></li>
                <li class="breadcrumb-item active">Edit Tiket WIsata</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-outline-primary">
                    <div class="card-body">
                        <form action="proses-edit-tiket.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_tiket" value="<?php echo $rowss['id_tiket']; ?>">
                            <div class="form-body">
                                <h3 class="card-title m-t-15">Form Tiket Wisata</h3>
                                <h6 class="card-subtitle">Hanya dapat mengubah Jumlah Tiket dan Harga Tiket</h6>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <select name="id_wisata" id="" class="form-control" value="<?= $rowss['id_wisata'];?>" disabled>
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
                                            <select name="jenis_tiket" id="" class="form-control" disabled>
                                                <option value="">-- Pilih Jenis Tiket --</option>
                                                <option value="domestik" <?= ($rowss['jenis_tiket'] == 'domestik' ) ? 'selected' : '';?>>Domestik</option>
                                                <option value="internasional" <?= ($rowss['jenis_tiket'] == 'domestik' ) ? 'selected' : '';?>>Internasional</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jumlah Tiket</label>
                                            <input type="text" name="jumlah" class="form-control" value = "<?= $rowss['jumlah']; ?>" placeholder="Kosongkan jika tidak perlu tiket">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Harga 1 Tiket</label>
                                            <input type="number" name="harga" class="form-control" value = "<?= $rowss['harga'];?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-check"></i> Simpan</button>
                                <a href="data-tiket.php" class="btn btn-inverse">  Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'app-bawah.php'; ?>