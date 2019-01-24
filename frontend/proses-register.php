<?php
    if(isset($_POST['submit'])){
        include 'koneksi.php';
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $username = $_POST['username'];
        $handphone = $_POST['handphone'];
        $alamat = $_POST['alamat'];
        
        $error = '';
        $query1 ="INSERT INTO pengunjung (nama, email, password, username, handphone, alamat)
        VALUES ('$nama','$email', '$password', '$username', '$handphone', '$alamat')"; 
        $mysqli = $koneksi->query($query1);

        if($mysqli){
            echo "<script>
                alert('Registrasi berhasil silahkan melakukan login! ');
                window.location.href='login.php';
            </script>";
        }
    }
?>