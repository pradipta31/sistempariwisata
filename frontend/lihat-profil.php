
<?php 
    include 'app-atas.php';
    include 'navigation.php'; 
    include 'koneksi.php';
    $id = $_GET['id_user'];
    $query = "SELECT * FROM users WHERE id_user='$id'";
    $hasil = mysqli_query($koneksi,$query);
    $rowss = mysqli_fetch_array($hasil);
?>
<section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <h1 class="mb-4">Hi There! I'm <?= $rowss['nama'];?></h1>
            <div class="post-content-body">
            <div class="row mb-5">
              <div class="col-md-6 mb-4 element-animate">
                <img src="../admin/images/<?= $rowss['foto'];?>" alt="Image placeholder" class="img-responsive" height="350px" width="350px">
              </div>
              <div class="col-md-6 mb-4 element-animate">
                <div class="text-justify">
                  <span class="fa fa-arrow-right"> About Me</span>
                  <p><?= $rowss['deskripsi'];?></p>
                </div>
                
              </div>
              
            </div>
            
            </div>
          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
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
      </div>
    </section>
    <?php include 'footer.php'; ?>
    <?php include 'app-bawah.php'; ?>