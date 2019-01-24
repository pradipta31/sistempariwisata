<?php
    include 'config.php';
    $query = "SELECT * FROM kunjungan";
    $tampil = $koneksi->query($query);
    $sql = "DELETE FROM kunjungan WHERE id_kunjungan = ('$_GET[id_kunjungan]')";
    $data = $koneksi->query($sql);
  
    if(mysqli_query($koneksi, $sql)){
      echo "Data Berhasil Dihapus!";
        header ('location: data-kunjungan-wisata.php');
    }else{
      echo "Data Gagal Dihapus!".mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
?>