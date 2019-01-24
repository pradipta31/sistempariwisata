<?php 
    include 'app-atas.php';
    include '../config.php';
?>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading"><strong>Selamat Datang <?= $row['nama']; ?>!</strong></h4>
                    <hr>
                    <p class="mb-0"><strong>di Sistem Informasi Tingkat Kunjungan Obyek Wisata Kabupaten Klungkung, mohon untuk menggunakan sistem dengan baik agar menciptakan kenyamanan bersama!</strong></p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-suitcase f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>
                                        <?php
                                        $query = "SELECT * FROM wisata";
                                        $hasil = mysqli_query($koneksi,$query);
                                        $data = array();
                                        while ($row = mysqli_fetch_array($hasil)) {
                                            $data[] = $row;
                                        }
                                        $count = count($data);
                                        echo "$count";
                                        ?>
                                    </h2>
                                    <p class="m-b-0">Tempat Wisata</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-users f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>
                                        <?php
                                            $query = "SELECT SUM(jumlah_kunjungan) as jml FROM kunjungan";
                                            $hasil = mysqli_query($koneksi,$query);
                                            $row = mysqli_fetch_assoc($hasil);
                                            $sum = $row['jml'];
                                            echo "$sum";
                                        ?>
                                    </h2>
                                    <p class="m-b-0">Pengunjung</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>
                                        <?php
                                            $query = "SELECT SUM(jumlah_kunjungan) as jml FROM kunjungan WHERE asal='Lokal'";
                                            $hasil = mysqli_query($koneksi,$query);
                                            $row = mysqli_fetch_assoc($hasil);
                                            $sum = $row['jml'];
                                            echo "$sum";
                                        ?>
                                    </h2>
                                    <p class="m-b-0">Lokal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>
                                        <?php
                                            $query = "SELECT SUM(jumlah_kunjungan) as jml FROM kunjungan WHERE asal = 'Internasional'";
                                            $hasil = mysqli_query($koneksi,$query);
                                            $row = mysqli_fetch_assoc($hasil);
                                            $sum = $row['jml'];
                                            echo "$sum";
                                        ?>
                                    </h2>
                                    <p class="m-b-0">Internasional</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- End Container fluid  -->
    <?php include 'app-bawah.php'; ?>