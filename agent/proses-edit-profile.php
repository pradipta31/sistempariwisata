<?php
  include 'config.php';
  if (isset($_POST['submit_data'])) {
    $id = $_POST['id_user'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $deskripsi = $_POST['deskripsi'];
    $password = md5($_POST['password']);

    if($_POST['password'] != null){
      $query = "UPDATE users SET nama = '$nama', username='$username', email = '$email',
       deskripsi='$deskripsi', password='$password' WHERE id_user = '$id'";
      $update = mysqli_query($koneksi, $query);
      if($update){
        echo "<script>alert('Data Berhasil Diubah!'); window.location='profile.php';</script>";
      }else{
        echo "<script>alert('Data Gagal Diubah!'); window.location='profile.php';</script>";
        // echo "Deskripsi : $deskripsi";
      }
    }else{
      $query = mysqli_query($koneksi,"UPDATE users SET nama = '$nama', username='$username', email = '$email', deskripsi='$deskripsi' WHERE id_user = '$id'");
      if($query){
        echo "<script>alert('Data Berhasil Diubah!'); window.location='profile.php';</script>";
        // echo "Deskripsi : $deskripsi";
      }else{
        echo "<script>alert('Data Gagal Diubah!'); window.location='profile.php';</script>";
        // echo "Deskripsi : $deskripsi";
      }
    }
  }

?>
