<?php
    include 'config.php';
    $query = "SELECT * FROM wisata";
    $tampil = $koneksi->query($query);
    $sql = "DELETE FROM wisata WHERE id_wisata = ('$_GET[id_wisata]')";
    $data = $koneksi->query($sql);
  
    if(mysqli_query($koneksi, $sql)){
      echo "Data Berhasil Dihapus!";
        header ('location: data-tempat-wisata.php');
    }else{
      echo "Data Gagal Dihapus!".mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
?>