<?php
    include "app-atas.php";
    include "config.php";
    $id = $_GET['id_wisata'];
    $query = "SELECT * FROM wisata WHERE id_wisata='$id'";
    $hasil = mysqli_query($koneksi,$query);
    $row = mysqli_fetch_array($hasil);
?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Edit Tempat Wisata : <?= $row['nama']; ?></h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Tambah Tempat WIsata</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-primary">
                    <div class="card-body">
                        <form action="proses-edit-wisata.php" method="POST" onsubmit="return validasi_input(this)" enctype="multipart/form-data">
                        <input type="hidden" name="id_wisata" value="<?php echo $row['id_wisata']; ?>">
                            <div class="form-body">
                                <h3 class="card-title m-t-15">Form Tempat Wisata</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label>Nama Tempat</label>
                                            <input type="text" class="form-control" name="nama" value="<?= $row['nama']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <br>
                                            <input type="file" name="file" value="<?= $row['file']; ?>" id="file">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Deskripsi Tempat Wisata</label>
                                            <textarea name="deskripsi" row="5" class="form-control" style="height: 150px"><?= $row['deskripsi']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-check"></i> Simpan</button>
                                <a href="data-tempat-wisata.php" class="btn btn-inverse">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function validasi_input(form){
  if (form.file.value == ""){
    alert("Gambar masih kosong!");
    form.file.focus();
    return (false);
  }
return (true);
}
</script>
<?php include 'app-bawah.php'; ?>