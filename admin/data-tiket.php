<?php include 'app-atas.php'; ?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Data Tiket Wisata</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Tiket Wisata</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Tiket Wisata</h4>
                        <h6 class="card-subtitle">Kelola Data Tiket Wisata</h6>
                            <a href="tambah-tiket.php" class="btn btn-primary">Tambah Tiket Wisata</a>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="10px">No</th>
                                        <th width="60px">Nama Tempat</th>
                                        <th width="20px">Penanggung Jawab</th>
                                        <th width="100px">Jenis Tiket</th>
                                        <th width="100px">Harga</th>
                                        <th width="60px">Jumlah</th>
                                        <th width="60px">Tanggal</th>
                                        <th width="20px">Opsi</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                <?php
                                    include "config.php";
                                    $query = mysqli_query($koneksi, "SELECT * FROM tiket");
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
                                        <td><?= $row['jenis_tiket']; ?> </td>
                                        <td><?= $row['harga']; ?>/org</td>
                                        <td>
                                            <?php
                                                if($row['jumlah'] == 'Tidak Terbatas'){
                                                    echo '<center><span class="alert alert-info"> Unlimited </span></center>';
                                                }else{
                                                    echo $row['jumlah'];
                                                }
                                            ?>
                                        </td>
                                        <td><?= $row['tgl_terbit']; ?></td>
                                        <td>
                                            <center>
                                                <a href="form-edit-tiket.php?id_tiket=<?php echo "$row[id_tiket]";?>" class="fa fa-pencil"></a>
                                                <a href="hapus-tiket.php?id_tiket=<?php echo "$row[id_tiket]";?>" class="fa fa-trash" onclick = "return confirm('Yakin Ingin hapus data ini ?')"></a>
                                            </center>
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