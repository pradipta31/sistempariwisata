<section class="site-section py-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb-4">Daftar Tempat Wisata Terbaru</h2>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-12 main-content">
            <div class="row">
              <?php 
                include 'koneksi.php';
                $query = mysqli_query($koneksi,"SELECT * FROM wisata");
                while($row = mysqli_fetch_assoc($query)){
                  $id_user = $row['id_user'];
                  $q = mysqli_query($koneksi, "SELECT * FROM users WHERE id_user = '$id_user'");
                  $r = mysqli_fetch_assoc($q);
              ?>
              <div class="col-md-3">
                <a href="javascript:void(0)" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="../admin/images/<?= $row['file'];?>" alt="Image placeholder" width="350px" height="200px">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Tempat Wisata </span> &bullet;
                      <span class="mr-2"><?= $row['tgl_publish'];?> </span> &bullet;
                      <span class="ml-2"><span class="fa fa-pencil"></span> <?= $r['username'];?></span>
                    </div>
                    <h2><?= $row['nama'];?></h2>
                    <p><?= substr($row['deskripsi'], 0, 150);?></p>
                    <div class="text-center">
                      <a href="lihat-wisata.php?id_wisata=<?php echo "$row[id_wisata]";?>" class="btn btn-primary" style="margin-bottom: 50px">Lihat Wisata</a>
                    </div>
                    <hr>
                  </div>
                </a>
              </div>
              
              <?php 
                }
              ?>
              
            </div>

            <div class="row">
              <div class="col-md-12 text-center">
                <nav aria-label="Page navigation" class="text-center">
                  <ul class="pagination">
                    <a href="semua-wisata.php" class="btn btn-outline-primary">Lihat Semua Wisata</a>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

          <!-- END main-content -->

          

        </div>
      </div>
    </section>