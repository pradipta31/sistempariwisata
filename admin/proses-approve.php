<?php
  include 'config.php';
  if (isset($_POST['submit'])) {
    $id = $_POST['id_pemesanan'];
    $status = 'approved';
    $update = "UPDATE pemesanan SET status = '$status' WHERE id_pemesanan='$id'";
    $query = mysqli_query($koneksi, $update);
    if ($query) {
        echo "<script>alert('Data Pemesanan telah disetujui!'); window.location='data-booking.php';</script>";
    }else{
        echo "<script>alert('Terjadi Kesalahan!'); window.location='data-booking.php';</script>";
    }
    
  }
  if (isset($_POST['submitt'])) {
    $id = $_POST['id_pemesanan'];
    $status = 'not_approved';
    $update = "UPDATE pemesanan SET status = '$status' WHERE id_pemesanan='$id'";
    $query = mysqli_query($koneksi, $update);
    if ($query) {
        echo "<script>alert('Data Pemesanan Tidak disetujui!'); window.location='data-booking.php';</script>";
    }else{
        echo "<script>alert('Terjadi Kesalahan!'); window.location='data-booking.php';</script>";
    }
    
  }

?>
