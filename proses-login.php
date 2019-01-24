<?php
session_start();
if( !isset($_POST['email']) ) { header('location:index.php'); exit(); }
$error = '';
require ( 'config.php' );
$email = trim( $_POST['email'] );
$password = trim( $_POST['password'] );
if( strlen($email) < 2 )
{
    $error = 'email tidak boleh kosong';
}else if( strlen($password) < 2 )
{
    $error = 'Password Tidak boleh kosong';
}else{
    $email = $koneksi->escape_string($email);
    $password = $koneksi->escape_string($password);
    $password = md5($password);
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
    $query = $koneksi->query($sql);
    if( !$query )
    {
        die( 'Database gagal! '. $koneksi->error );
    }
    if( $query->num_rows == 1 )
    {
        $row =$query->fetch_assoc();
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['role_user'] = $row['role'];
        if($row['role'] == 'admin'){
            $_SESSION['session_admin']= 'TRUE';
        }elseif($row['role'] == 'agent') {
          $_SESSION['session_agent'] = 'TRUE';
        }
        header('location:'.$url.'/'.$_SESSION['role_user'].'/');
        exit();
    }else{
        echo "<script>alert('Login Gagal!'); window.location='index.php';</script>";
    }
}
if( !empty($error) )
{
    $_SESSION['error'] = $error;
    header('location:'.$url.'/index.php');
    exit();
}
?>
