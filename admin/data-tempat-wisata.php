<?php include 'app-atas.php'; ?>
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
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Tempat Wisata</h4>
                        <h6 class="card-subtitle">Kelola Data Tempat Wisata</h6>
                            <a href="tambah-tempat-wisata.php" class="btn btn-primary">Tambah Tempat Wisata</a>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="10px">No</th>
                                        <th width="60px">Nama Tempat</th>
                                        <th width="20px">Foto</th>
                                        <th width="150px">Deskripsi</th>
                                        <th width="60px">Tanggal Publish</th>
                                        <th width="60px">Penanggung Jawab</th>
                                        <th width="20px">Opsi</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                <?php
                                    include "config.php";
                                    $query = mysqli_query($koneksi, "SELECT * FROM wisata");
                                    $no = 1;
                                    while($row = mysqli_fetch_assoc($query)){
                                        $id_user = $row['id_user'];
                                        $q = mysqli_query($koneksi, "SELECT * FROM users WHERE id_user = '$id_user'");
                                        $rr = mysqli_fetch_assoc($q);
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $row['nama']; ?></td>
                                        <td>
                                            <center><a href="images/<?= $row['file']; ?>">
                                                <img src="images/<?= $row['file']; ?>" style="border-radius: 5px" height="75px" width="90px">
                                            </a></center>
                                        </td>
                                        <td><?= substr($row['deskripsi'], 0, 50); ?>..</td>
                                        <td><?= $row['tgl_publish']; ?></td>
                                        <td><?= $rr['username']; ?></td>
                                        <td>
                                            <center>
                                                <a href="form-edit-wisata.php?id_wisata=<?php echo "$row[id_wisata]";?>" class="fa fa-pencil"></a>
                                                <a href="lihat-tempat-wisata.php?id_wisata=<?php echo "$row[id_wisata]";?>" class="fa fa-eye"></a>
                                                <a href="hapus-wisata.php?id_wisata=<?php echo "$row[id_wisata]";?>" class="fa fa-trash" onclick = "return confirm('Yakin Ingin hapus data ini ?')"></a>
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