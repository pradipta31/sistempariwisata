<?php 
    include 'app-atas.php'; 
    include 'config.php';
    $id = $_GET['id_kunjungan'];
    //get kunjungan
    $query = "SELECT * FROM kunjungan WHERE id_kunjungan='$id'";
    $hasil = mysqli_query($koneksi,$query);
    $rowsss = mysqli_fetch_array($hasil);
    $id_user = $row['id_user'];
    // get users
    $q = "SELECT * FROM users WHERE id_user ='$id_user'";
    $a = mysqli_query($koneksi,$q);
    $rows = mysqli_fetch_assoc($a);
    $id_wisata = $rowsss['id_wisata'];
    //get tempat wisata
    $qq = "SELECT * FROM wisata WHERE id_wisata = '$id_wisata'";
    $aa = mysqli_query($koneksi,$qq);
    $rowss = mysqli_fetch_assoc($aa);
?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Kunjungan Wisata : <?= $rowss['nama'];?></h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="data-kunjungan-wisata.php">Data Kunjungan Wisata</a></li>
                <li class="breadcrumb-item active">Kunjungan Wisata : <?= $rowss['nama'];?></li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h3><i class="fa fa-map-pin"></i> <?= $rowss['nama']; ?> </h3>
                                <h4><a href="lihat-profile.php?id_user=<?php echo "$rows[id_user]";?>"><i class="fa fa-user"></i> <?= $rows['nama']; ?></a></h4>
                            </div>
                            <div class="col-md-6">
                                <h4><i class="fa fa-users"></i> <?= $rowsss['jumlah_kunjungan']; ?> Orang <strong>(<?= $rowsss['asal'];?>)</strong></h4>
                                <h3><i class="fa fa-calendar"></i> <?= $rowsss['waktu']; ?></h3>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <img src="images/<?= $rowss['file']; ?>" class="img-responsive" 
                            style="display: block;
                                    margin-left: auto;
                                    margin-right: auto;
                                    width: 50%;border-radius: 3px">
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="text-justify">
                                <?= $rowss['deskripsi']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="form-actions">
                            <a href="data-kunjungan-wisata.php" class="btn btn-inverse" style="margin-left: 15px">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
<?php include 'app-bawah.php'; ?>
            