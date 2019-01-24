<?php include 'app-atas.php'; ?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Data Booking Wisata</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Booking Wisata</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Booking Wisata</h4>
                        <h6 class="card-subtitle">Hanya dapat menyetujui pesanan dan membatalkan pesanan</h6>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Tempat</th>
                                        <th>Nama Pemesan</th>
                                        <th>Email Pemesan</th>
                                        <th>Nomor Telepon</th>
                                        <th>Alamat Pemesan</th>
                                        <th>Tanggal Pesanan</th>
                                        <th>Jumlah</th>
                                        <th>Tanggal</th>
                                        <th>Bukti Transfer</th>
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php
                                    include "config.php";
                                    $query = mysqli_query($koneksi, "SELECT * FROM pemesanan");
                                    $no = 1;
                                    while($row = mysqli_fetch_assoc($query)){
                                        $id_wisata = $row['id_wisata'];
                                        $qq = mysqli_query($koneksi, "SELECT * FROM wisata WHERE id_wisata = '$id_wisata'");
                                        $rr = mysqli_fetch_assoc($qq);
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $rr['nama']; ?></td>
                                        <td><?= $row['nama']; ?> </td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['handphone']; ?></td>
                                        <td><?= $row['alamat']; ?></td>
                                        <td><?= $row['tgl_pesanan']; ?></td>
                                        <td>
                                          <a href="../frontend/images/<?=$row['bukti_tf']?>" class="btn btn-primary">Lihat Bukti Transfer</a>
                                        </td>
                                        <td><?= $row['pax']; ?> org</td>
                                        <td><?= $row['tanggal']; ?></td>
                                        <td>
                                            <?php
                                                if($row['status'] == 'nothing'){
                                                ?>
                                                    <span class="alert alert-warning">Belum Disetujui</span>
                                                <?php
                                                }elseif($row['status'] == 'not_approved'){ ?>
                                                    <span class="alert alert-danger">Tidak Disetujui</span>
                                                <?php
                                                }elseif($row['status'] == 'approved'){ ?>
                                                    <span class="alert alert-success">Disetujui</span>
                                                <?php
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                if($row['status'] == 'nothing'){
                                            ?>
                                                    <form action="proses-approve.php" method="POST" enctype="multipart/form-data">
                                                        <input type="hidden" name="id_pemesanan" value="<?= $row['id_pemesanan']; ?>">
                                                        <input type="submit" name="submit" class="btn btn-success" value="Approve">
                                                        <input type="submit" name="submitt" class="btn btn-danger" value="Not Approve">
                                                    </form>
                                            <?php
                                                }else{
                                            ?>
                                                    <span class="alert alert-success">Approved</span>
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
