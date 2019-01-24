<?php 
  include 'app-atas.php'; 
  include 'koneksi.php';
  session_start();
  $id_pengunjung = ( isset($_SESSION['id_pengunjung']) ) ? $_SESSION['id_pengunjung'] : '';
  $query = mysqli_query($koneksi, "SELECT * FROM pengunjung WHERE id_pengunjung = '$id_pengunjung'");
  $row = mysqli_fetch_assoc($query);
  $email = $row['email'];
  
?>
  <?php include 'navigation-pengunjung.php'; ?>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
          <br>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama        <b style="margin-left: 85px">:</b> <?php echo $row['nama']; ?></label>
              </div>
              <div class="form-group">
                <label>Email        <b style="margin-left: 90px">:</b> <?php echo $row['email']; ?></label>
              </div>
              <div class="form-group">
                <label>Username        <b style="margin-left: 58px">:</b> <?php echo $row['username']; ?></label>
              </div>
              <div class="form-group">
                <label>Handphone        <b style="margin-left: 47px">:</b> <?php echo $row['handphone']; ?></label>
              </div>
              <div class="form-group">
                <label>Alamat        <b style="margin-left: 82px">:</b> <?php echo $row['alamat']; ?></label>
              </div>
            </div>
            <div class="col-md-2 text-center">
                <img src="../admin/images/user.jpg" height="227px" width="189px" style="border-radius: 5px">
                <br>
            </div>
          </div>
        </div>  
    </div>
    </div>
  <?php include 'footer.php'; ?>
  <?php include 'app-bawah.php'; ?>