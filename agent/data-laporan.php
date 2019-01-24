<?php include 'app-atas.php'; ?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Data Laporan</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Laporan</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Laporan</h4>
                        <h6 class="card-subtitle">Kelola Data Laporan</h6>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="10px">No</th>
                                        <th>Nama Tempat</th>
                                        <th>Agent</th>
                                        <th>Judul</th>
                                        <th>Jumlah Pengunjung</th>
                                        <th>Tanggal</th>
                                        <th>Asal</th>
                                        <th style="text-align: left">Deskripsi</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                <?php
                                    include "config.php";
                                    $query = mysqli_query($koneksi, "SELECT * FROM laporan");
                                    $no = 1;
                                    while($row = mysqli_fetch_assoc($query)){
                                        $id_user = $row['id_user'];
                                        $id_wisata = $row['id_wisata'];
                                        $q = mysqli_query($koneksi, "SELECT * FROM users WHERE id_user = '$id_user'");
                                        $r = mysqli_fetch_assoc($q);
                                        $qq = mysqli_query($koneksi, "SELECT * FROM wisata WHERE id_wisata = '$id_wisata'");
                                        $rr = mysqli_fetch_assoc($qq);
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $rr['nama']; ?></td>
                                        <td><?= $r['nama'];?></td>
                                        <td><?= $row['judul']; ?></td>
                                        <td><?= $row['jumlah_kunjungan']; ?> Orang </td>
                                        <td><?= $row['waktu']; ?></td>
                                        <td>
                                            <div class="text-left">
                                                <?= $row['asal']; ?>
                                            </div>
                                        </td>
                                        <td style="text-align: left"><?= $row['deskripsi']; ?></td>
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