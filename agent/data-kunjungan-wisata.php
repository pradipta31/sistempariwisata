<?php include 'app-atas.php'; ?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Data Kunjungan Wisata</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Kunjungan Wisata</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Kunjungan Wisata</h4>
                        <h6 class="card-subtitle">Kelola Data Kunjungan Wisata</h6>
                            <a href="tambah-kunjungan-wisata.php" class="btn btn-primary">Tambah Kunjungan Wisata</a>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="10px">No</th>
                                        <th width="60px">Nama Tempat</th>
                                        <th width="20px">Penanggung Jawab</th>
                                        <th width="150px">Jumlah Pengunjung</th>
                                        <th width="60px">Tanggal</th>
                                        <th width="60px">Asal</th>
                                        <th width="30px">Opsi</th>
                                        <th width="10px">Laporan</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                <?php
                                    include "config.php";
                                    $query = mysqli_query($koneksi, "SELECT * FROM kunjungan");
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
                                        <td><?= $row['jumlah_kunjungan']; ?> Orang </td>
                                        <td><?= $row['waktu']; ?></td>
                                        <td><?= $row['asal']; ?></td>
                                        <td>
                                            <center>
                                                <a href="form-edit-kunjungan.php?id_kunjungan=<?php echo "$row[id_kunjungan]";?>" class="fa fa-pencil"></a>
                                                <a href="lihat-kunjungan-wisata.php?id_kunjungan=<?php echo "$row[id_kunjungan]";?>" class="fa fa-eye"></a>
                                                <a href="hapus-kunjungan.php?id_kunjungan=<?php echo "$row[id_kunjungan]";?>" class="fa fa-trash" onclick = "return confirm('Yakin Ingin hapus data ini ?')"></a>
                                            </center>
                                        </td>
                                        <td>
                                            <?php
                                                if($row['status'] == 'nothing'){
                                            ?>
                                            <a href="form-laporan.php?id_kunjungan=<?php echo "$row[id_kunjungan]";?>" class="btn btn-warning btn-small">Laporkan</a>
                                            <?php
                                                }else{ 
                                            ?>
                                                <span class="alert alert-success">Dilaporkan</span>
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