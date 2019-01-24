<?php include 'app-atas.php'; ?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Ubah Profile</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="profile.php">Profile</a></li>
                <li class="breadcrumb-item active">Ubah Profile</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <!-- Column -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="proses-edit-profile.php" class="form-horizontal form-material" method="POST" onsubmit="return validasi_input(this)" enctype="multipart/form-data">
                        <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Lengkap</label>
                                        <div class="col-md-12">
                                            <input type="text" name="nama" class="form-control form-control-line" value="<?= $row['nama'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Username</label>
                                        <div class="col-md-12">
                                            <input type="text" name="username" class="form-control form-control-line" value="<?= $row['username']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="email" class="form-control form-control-line" value="<?= $row['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <?php
                                                $password = $row['password'];
                                                $password = base64_decode($password);
                                            ?>
                                            <input type="password" name="password" class="form-control form-control-line" name="password" value="<?= $password;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Deskripsi tentang saya</label>
                                        <div class="col-md-12">
                                            <textarea name="deskripsi" class="form-control" id="deskripsi" style="height: 150px"><?= $row['deskripsi']; ?></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-info" style="margin-left: 15px"><i class="fa fa-check"></i> Simpan</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-center">
                                        <?php
                                            if($row['foto'] == null){
                                                echo '<img src="../admin/images/user.jpg" height="350px" width="350px" class="img-rounded" style="border-radius:50%">';
                                            }else{?>
                                                <img src="images/<?= $row['foto']; ?>" height="350px" width="350px" style="border-radius:50%"/>
                                        <?php
                                            }
                                        ?>
                                        <br>
                                        <br>
                                        <label for="">Ganti Foto</label>
                                        <br>
                                        <input type="file" class="btn btn-warning" name="foto" id="foto" value="<?= $row['foto']; ?>">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function validasi_input(form){
    if (form.foto.value == ""){
        alert("Foto masih kosong!");
        form.foto.focus();
        return (false);
    }
    return (true);
    }
</script>
<?php include 'app-bawah.php'; ?>
