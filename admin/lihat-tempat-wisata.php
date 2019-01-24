<?php 
    include 'app-atas.php'; 
    include 'config.php';
    $id = $_GET['id_wisata'];
    $query = "SELECT * FROM wisata WHERE id_wisata='$id'";
    $hasil = mysqli_query($koneksi,$query);
    $row = mysqli_fetch_array($hasil);
    $id_user = $row['id_user'];
    $q = "SELECT * FROM users WHERE id_user ='$id_user'";
    $a = mysqli_query($koneksi,$q);
    $rows = mysqli_fetch_assoc($a);
?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Tempat Wisata</li>
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
                        <h3><i class="fa fa-map-pin"></i> <?= $row['nama']; ?> </h3>
                        <h4><a href="lihat-profile.php?id_user=<?php echo "$rows[id_user]";?>"><i class="fa fa-user"></i> <?= $rows['nama']; ?></a></h4>
                        <hr>
                        <div class="col-md-12">
                            <img src="images/<?= $row['file']; ?>" class="img-responsive" 
                            style="display: block;
                                    margin-left: auto;
                                    margin-right: auto;
                                    width: 50%;border-radius: 3px">
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="text-justify">
                                <?= $row['deskripsi']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="form-actions">
                            <a href="data-tempat-wisata.php" class="btn btn-inverse">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
<?php include 'app-bawah.php'; ?>
            