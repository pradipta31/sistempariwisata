<?php
  include 'koneksi.php';
  if (isset($_POST['submit'])) {
    $id = $_POST['id_pemesanan'];
    $problem = $_FILES['bukti_tf']['error'];
    $lokasi_file = $_FILES['bukti_tf']['tmp_name'];
    $nama_file = $_FILES['bukti_tf']['name'];
    // echo $nama_file;

    if ($nama_file != ''){
      if ($problem === 0) {
        move_uploaded_file($lokasi_file, 'images/' .$nama_file);
        $update = "UPDATE pemesanan SET bukti_tf = '$nama_file' WHERE id_pemesanan='$id'";
        $query = mysqli_query($koneksi, $update);
        if ($query) {
          echo "<script>alert('Upload bukti transfer berhasil!'); window.location='pesanan-saya.php';</script>";
        }else{
          echo "<script>alert('Upload bukti transfer gagal!'); window.location='pesanan-saya.php';</script>";
        }
      }
    }

  }

?>
