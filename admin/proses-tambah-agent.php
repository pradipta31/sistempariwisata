<?php
    if(isset($_POST['submit'])){
        include 'config.php';
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $deskripsi = $_POST['deskripsi'];
        $role = 'agent';
        $cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
        $cekemail = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");
        if(mysqli_num_rows($cek) == 0){
            if(mysqli_num_rows($cekemail) == 0){
                $query = mysqli_query($koneksi, "INSERT INTO users (nama,username,email,password,role,deskripsi)
                VALUES ('$nama','$username','$email','$password','$role','$deskripsi')");
                if($query){
                    echo "<script>
                        alert('Agent berhasil ditambahkan!');
                        window.location.href='tambah-agent.php';
                    </script>";
                }
            }else{
                echo "Email sudah digunakan";
            }
        }else{
            echo "Username sudah digunakan";
        }
    }
?>