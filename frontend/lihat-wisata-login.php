
<?php 
    include 'app-atas.php';
    include 'navigation-pengunjung.php'; 
    include 'koneksi.php';
    
    $id = $_GET['id_wisata'];
    $query = "SELECT * FROM wisata WHERE id_wisata='$id'";
    $hasil = mysqli_query($koneksi,$query);
    $rowss = mysqli_fetch_array($hasil);
    $id_user = $rowss['id_user'];
    $q = mysqli_query($koneksi, "SELECT * FROM users WHERE id_user = '$id_user'");
    $r = mysqli_fetch_assoc($q);
    session_start();
    $id_pengunjung = ( isset($_SESSION['id_pengunjung']) ) ? $_SESSION['id_pengunjung'] : '';
    $queryp = mysqli_query($koneksi, "SELECT * FROM pengunjung WHERE id_pengunjung = '$id_pengunjung'");
    $rowp = mysqli_fetch_assoc($queryp);
?>
<section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <h1 class="mb-4"><?= $rowss['nama'];?></h1>
            <div class="post-meta">
              <span class="category">Wisata</span>
              <span class="mr-2"><?= $rowss['tgl_publish'];?> </span> &bullet;
              <span class="ml-2"><span class="fa fa-pencil"></span> <?= $r['nama'];?></span>
            </div>
            <div class="post-content-body">
            <div class="row mb-5">
              <div class="col-md-12 mb-4 element-animate">
                <img src="../admin/images/<?= $rowss['file'];?>" alt="Image placeholder" class="img-fluid">
              </div>
            </div>
            <div class="text-justify">
              <p><?= $rowss['deskripsi'];?></p>
            </div>
            </div>
          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <div class="bio text-center">
                <img src="../admin/images/<?= $r['foto'];?>" alt="Image Placeholder" class="img-circle img-responsive">
                <div class="bio-body">
                  <h2><?= $r['nama'];?></h2>
                  <div class="text-justify">
                    <p><?= $r['deskripsi'];?></p>
                  </div>
                  <p><a href="lihat-profil.php?id_user=<?php echo "$r[id_user]";?>" class="btn btn-primary btn-sm">Read my bio</a></p>
                </div>
              </div>
            </div>
            <!-- END sidebar-box -->  
            <div class="sidebar-box">
              <h3 class="heading">Lihat Wisata Lainnya</h3>
              <div class="post-entry-sidebar">
                <ul>
                  <?php 
                    $qrr = mysqli_query($koneksi, "SELECT * FROM wisata");
                    while($row = mysqli_fetch_assoc($qrr)){
                      $id_usr = $row['id_user'];
                      $qry = mysqli_query($koneksi, "SELECT * FROM users WHERE id_user = '$id_usr'");
                      $tampil = mysqli_fetch_assoc($qry);
                  ?>
                  <li>
                    <a href="lihat-wisata.php?id_wisata=<?php echo "$row[id_wisata]";?>">
                      <img src="../admin/images/<?= $row['file'];?>" alt="Image placeholder" class="mr-4">
                      <div class="text">
                        <h4><?= $row['nama'];?></h4>
                        <div class="post-meta">
                          <span class="mr-2"><?= $row['tgl_publish'];?> </span> &bullet;
                          <span class="ml-2"><span class="fa fa-pencil"></span> <?= $tampil['username'];?></span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <?php 
                    }
                  ?>
                </ul>
              </div>
            </div>
            <!-- END sidebar-box -->

          </div>
          <!-- END sidebar -->
            
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card card-outline-primary">
                    <div class="card-body">
                        <form action="proses-book-tiket.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_wisata" value="<?php echo $id; ?>">
                            <div class="form-body">
                                <h3 class="card-title m-t-15">Form Pemesanan Tiket Wisata</h3>
                                <h6 class="card-subtitle">Silahkan isi Form ini jika anda ingin memesan tempat wisata ini</h6>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="">Nama</label>
                                            <input type="text" name="nama" class="form-control" value="<?= $rowp['nama']; ?>">
                                        </div>
                                        <div class="form-group">
                                        <label for="">Email</label>
                                            <input type="email" name="email" class="form-control" value="<?= $rowp['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">alamat</label>
                                            <input type="text" name="alamat" class="form-control" value="<?= $rowp['alamat']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nomor Telepon</label>
                                            <input type="text" name="handphone" class="form-control" value="<?= $rowp['handphone']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Jumlah Orang</label>
                                            <input type="number" name="pax" class="form-control" placeholder="(misal) 5">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Tgl Pemesanan</label>
                                            <input type="date" name="tgl_pesanan" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-check"></i> Book Now</button>
                                </div>
                            </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <?php include 'footer.php'; ?>
    <?php include 'app-bawah.php'; ?>