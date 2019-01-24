<?php
  include 'config.php';
  if (isset($_POST['submit'])) {
    $id = $_POST['id_wisata'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $tgl_publish = date("Y-m-d");
    $problem = $_FILES['file']['error'];
    $lokasi_file = $_FILES['file']['tmp_name'];
    $nama_file = $_FILES['file']['name'];
    // echo $nama_file;

    if ($nama_file != ''){
      if ($problem === 0) {
        move_uploaded_file($lokasi_file, 'images/' .$nama_file);
        $update = "UPDATE wisata SET nama = '$nama', deskripsi = '$deskripsi', tgl_publish = '$tgl_publish', file = '$nama_file' WHERE id_wisata='$id'";
        $query = mysqli_query($koneksi, $update);
        if ($query) {
          echo "<script>alert('Data Berhasil Diubah!'); window.location='data-tempat-wisata.php';</script>";
        }else{
          echo "<script>alert('Data Gagal Diubah!'); window.location='data-tempat-wisata.php';</script>";
        }
      }
    }
    
  }

?>
