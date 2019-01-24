<?php
  include 'config.php';
  if (isset($_POST['submit'])) {
    $id = $_POST['id_user'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $deskripsi = $_POST['deskripsi'];
    $problem = $_FILES['foto']['error'];
    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];

      if ($nama_file != ''){
        if ($problem === 0) {
            move_uploaded_file($lokasi_file, 'images/' .$nama_file);
            if($password == 0){
              $update = mysqli_query($koneksi,"UPDATE users SET foto = '$nama_file' WHERE id_user='$id'");
              // $update = mysqli_query($koneksi,"UPDATE users SET nama = '$nama', username = '$username', email = '$email', foto = '$nama_file', deskripsi = '$deskripsi' WHERE id_user='$id'");
              // $query = mysqli_query($koneksi, $update);
              if ($update) {
                echo "<script>alert('Data Berhasil Diubah!'); window.location='profile.php';</script>";
              }else{
                echo "<script>alert('Data Gagal Diubah!'); window.location='profile.php';</script>";
              }
            }
            // else{
            //   $update = mysqli_query($koneksi,"UPDATE users SET nama = '$nama', username = '$username', email = '$email', password = '$password', foto = '$nama_file', deskripsi = '$deskripsi' WHERE id_user='$id'");
            //   // $query = mysqli_query($koneksi, $update);
            //   if ($update) {
            //     echo "<script>alert('Data Berhasil Diubah!'); window.location='profile.php';</script>";
            //   }else{
            //     echo "<script>alert('Data Gagal Diubah!'); window.location='profile.php';</script>";
            // }
          // }
        }
      }
    
  }

?>
