<?php
  include 'app-atas.php';
  include 'koneksi.php';
  $id = $_GET['id_pemesanan'];
  $query = "SELECT * FROM pemesanan WHERE id_pemesanan='$id'";
  $hasil = mysqli_query($koneksi,$query);
  $row = mysqli_fetch_array($hasil);
?>
  <?php include 'navigation-pengunjung.php'; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="margin-bottom: 80px">
          <br>
          <form action="proses-upload-bukti-tf.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_pemesanan" value="<?= $row['id_pemesanan']; ?>">
            <div class="form-group">
              <label for="">Upload Bukti Transfer</label>
              <input type="file" name="bukti_tf" class="form-control">
            </div>
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
            <a href="pesanan-saya.php" class="btn btn-secondary">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  <?php include 'footer.php'; ?>
  <?php include 'app-bawah.php'; ?>
