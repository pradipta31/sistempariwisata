<?php
    include 'config.php';
    $query = "SELECT * FROM tiket";
    $tampil = $koneksi->query($query);
    $sql = "DELETE FROM tiket WHERE id_tiket = ('$_GET[id_tiket]')";
    $data = $koneksi->query($sql);
  
    if(mysqli_query($koneksi, $sql)){
      echo "Data Berhasil Dihapus!";
        header ('location: data-tiket.php');
    }else{
      echo "Data Gagal Dihapus!".mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
?>