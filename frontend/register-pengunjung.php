<?php
    include 'app-atas.php';
    include 'navigation.php';
?>
<section class="site-section py-md">
    <div class="container">
        <div class="row">
        <div class="col-md-2">

        </div>
            <div class="col-md-8">
                <div class="card card-outline-primary">
                    <div class="card-body">
                        <form action="proses-register.php" method="POST" enctype="multipart/form-data">
                        <div class="form-body">
                            <h3 class="card-title m-t-15">Form Registration</h3>
                            <h6 class="card-subtitle">Silahkan mengisi form ini dengan baik dan benar</h6>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                            <input type="text" name="nama" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label for="">Email</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Username</label>
                                            <input type="username" name="username" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Nomor Telepon</label>
                                            <input type="number" name="handphone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Alamat</label>
                                            <input type="text" name="alamat" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-check"></i> Register</button>
                                    <a href="login.php" class="btn btn-secondary"> Kembali</a>
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