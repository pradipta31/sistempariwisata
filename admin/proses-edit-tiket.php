<?php
  include 'config.php';
  if (isset($_POST['submit'])) {
    $id_tiket = $_POST['id_tiket'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    // echo $id_wisata;

    if($jumlah != null){
      $update = "UPDATE tiket SET jumlah = '$jumlah', harga = '$harga' WHERE id_tiket='$id_tiket'";
      $query = mysqli_query($koneksi, $update);
      if ($query) {
          echo "<script>alert('Data Berhasil Diubah!'); window.location='data-tiket.php';</script>";
      }else{
          echo "<script>alert('Data Gagal Diubah!'); window.location='data-tiket.php';</script>";
      }
    }else{
      $update = "UPDATE tiket SET jumlah = 'Tidak Terbatas', harga = '$harga' WHERE id_tiket='$id_tiket'";
      $query = mysqli_query($koneksi, $update);
      if ($query) {
          echo "<script>alert('Data Berhasil Diubah!'); window.location='data-tiket.php';</script>";
      }else{
          echo "<script>alert('Data Gagal Diubah!'); window.location='data-tiket.php';</script>";
      }
    }
    
  }

?>
