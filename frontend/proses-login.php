<?php
  include 'koneksi.php';
  session_start(); // sesi dimulai
  $error = ''; // set error menjadi kosong
  if (isset($_POST['submit'])) { // mengambil name submit
    if (empty($_POST['email']) or empty($_POST['password'])) {
      $error = "Email or Password is invalid"; // jika email atau password kosong maka muncul pesan error
    }else{
      $email = $_POST['email']; // mengambil data email
      $password = md5($_POST['password']); // mengambil data password

      $query = mysqli_query($koneksi, "SELECT * FROM pengunjung WHERE password ='$password' AND email = '$email'");
      $userid = mysqli_fetch_assoc($query); // menampilkan index
      $rows = mysqli_num_rows($query); // menampilkan nomor
      if ($rows == 1) { // jika nomor adalah benar
        $_SESSION['login_pengunjung'] = $email; 
        $_SESSION['id_pengunjung'] = $userid['id_pengunjung'];
        header("location: home.php"); // menuju ke halaman dashboard.php
      }else {
        echo "<script>alert('Email atau Password salah!');
          window.location.href='login.php';
        </script>";
      }
      mysqli_close($koneksi);
    }
  }
?>
