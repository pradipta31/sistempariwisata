<?php
    include ('proses-login.php'); // Memasukkan Skrip login
    // session_start();
    // if(isset($_SESSION['login_pengunjung'])){
    //   header("location: home.php");
    // } // mengecek apakah session adalah login admin
    include 'app-atas.php';
    include 'navigation.php';
?>
<section class="site-section py-md">
      <div class="container">
<div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-4">
        <div class="card card-outline-primary">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_wisata" value="<?php echo $id; ?>">
                    <div class="form-body">
                        <h3 class="card-title m-t-15">Form Login</h3>
                        <h6 class="card-subtitle">Silahkan Login terlebih dahulu untuk dapat melihat pemesanan</h6>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                <label for="">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-sign-in"></i> Login</button>
                            <a href="register-pengunjung.php" class="btn btn-info"> Register</a>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>

<?php
    include 'footer.php';
    include 'app-bawah.php';
?>