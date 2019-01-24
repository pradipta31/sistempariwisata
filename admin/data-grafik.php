<?php include 'app-atas.php'; ?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Laporan Kunjungan Wisata</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Laporan Kunjungan Wisata</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Laporan Kunjungan Wisata</h4>
                        <h6 class="card-subtitle">Laporan Kunjungan Wisata by Agent </h6>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Tempat</th>
                                        <th style="text-align: center">Opsi</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                <?php
                                    include "config.php";
                                    $query = mysqli_query($koneksi, "SELECT id_wisata,COUNT(*) FROM laporan GROUP BY id_wisata");
                                    $no = 1;
                                    while($row = mysqli_fetch_assoc($query)){
                                        $id_wisata = $row['id_wisata'];
                                        $qq = mysqli_query($koneksi, "SELECT * FROM wisata WHERE id_wisata = '$id_wisata'");
                                        $rr = mysqli_fetch_assoc($qq);
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $rr['nama']; ?></td>
                                        <td style="text-align: center">
                                            <?php 
                                            if($id_wisata == 1){ ?>
                                                <a href="grafik-wisata-1.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php
                                                }elseif($id_wisata == 2){ ?>
                                                    <a href="grafik-wisata-2.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 3){ ?>
                                                    <a href="grafik-wisata-3.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 4){ ?>
                                                    <a href="grafik-wisata-4.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 5){ ?>
                                                    <a href="grafik-wisata-5.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 6){ ?>
                                                    <a href="grafik-wisata-6.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 7){ ?>
                                                    <a href="grafik-wisata-7.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 8){ ?>
                                                    <a href="grafik-wisata-8.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 9){ ?>
                                                    <a href="grafik-wisata-9.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 10){ ?>
                                                    <a href="grafik-wisata-10.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 11){ ?>
                                                    <a href="grafik-wisata-11.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 12){ ?>
                                                    <a href="grafik-wisata-12.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 13){ ?>
                                                    <a href="grafik-wisata-13.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 14){ ?>
                                                    <a href="grafik-wisata-14.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 15){ ?>
                                                    <a href="grafik-wisata-15.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 16){ ?>
                                                    <a href="grafik-wisata-16.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 17){ ?>
                                                    <a href="grafik-wisata-17.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 18){ ?>
                                                    <a href="grafik-wisata-18.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 19){ ?>
                                                    <a href="grafik-wisata-19.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }elseif($id_wisata == 20){ ?>
                                                    <a href="grafik-wisata-20.php" class="btn btn-primary btn-small">Lihat Grafik</a>
                                            <?php 
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'app-bawah.php'; ?>