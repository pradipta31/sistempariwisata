<?php
  include 'config.php';
  if (isset($_POST['submit'])) {
    $id_kunjungan = $_POST['id_kunjungan'];
    $id_wisata = $_POST['id_wisata'];
    $jumlah = $_POST['jumlah_kunjungan'];
    $waktu = date($_POST['waktu']);
    $asal = $_POST['asal'];

    // echo $id_wisata;

    $update = "UPDATE kunjungan SET id_wisata = '$id_wisata', jumlah_kunjungan = '$jumlah', waktu = '$waktu', asal = '$asal' WHERE id_kunjungan='$id_kunjungan'";
    $query = mysqli_query($koneksi, $update);
    if ($query) {
        echo "<script>alert('Data Berhasil Diubah!'); window.location='data-kunjungan-wisata.php';</script>";
    }else{
        echo "<script>alert('Data Gagal Diubah!'); window.location='data-kunjungan-wisata.php';</script>";
    }
    
  }

?>
