<?php 
    include 'app-atas.php'; 
    include 'config.php';
    $id = $_GET['id_user'];
    $query = "SELECT * FROM users WHERE id_user='$id'";
    $hasil = mysqli_query($koneksi,$query);
    $row = mysqli_fetch_array($hasil);
?>
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Profile : <?= $row['username']; ?></h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-two">
                            <header>
                                <div class="avatar">
                                    <?php
                                        if($row['foto'] == null){
                                            echo '<img src="images/user.jpg">';
                                        }else{ ?>
                                            <a href="images/<?= $row['foto'];?>"><img src="images/<?= $row['foto']; ?>" alt="<?= $row['username'];?>"></a>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </header>

                            <h3><i class="fa fa-user"></i> <?= $row['nama']; ?> (<?= $row['username'];?>)
                                <br>
                                <i class="fa fa-envelope"></i> <?= $row['email'];?>
                            </h3>
                            <div class="desc">
                                <i class="fa fa-id-card"></i> <?= $row['deskripsi']; ?>
                            </div>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>

        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
<?php
    include 'app-bawah.php';
?>