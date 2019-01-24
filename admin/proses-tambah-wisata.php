<?php
    if(isset($_POST['submit'])){
        include 'config.php';
        $id_user = $_POST['id_user'];
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $tgl_publish = date("Y-m-d");
        $lokasi_file = $_FILES['file']['tmp_name'];
        $tipe_file = $_FILES['file']['type'];
        $nama_file = $_FILES['file']['name'];
        $direktori = "images/$nama_file";
        $cek = mysqli_query($koneksi, "SELECT * FROM wisata WHERE nama='$nama'");
        $putty = mysqli_fetch_assoc($cek);
        $num = mysqli_num_rows($cek);
        $error = '';
        
        if($num == 1){
            echo "<script>
                alert('Data yang anda inputkan sudah ada');
                window.location.href='tambah-tempat-wisata.php';
            </script>";
        }else{
            if(!empty($lokasi_file)){
                move_uploaded_file($lokasi_file,$direktori);
                $query1 ="insert into wisata (id_user, nama, deskripsi, tgl_publish, file)
                VALUES ('$id_user','$nama','$deskripsi','$tgl_publish','$nama_file')"; 
                $mysqli = $koneksi->query($query1);

                echo "<script>
                    alert('Data tempat wisata berhasil ditambahkan!');
                    window.location.href='tambah-tempat-wisata.php';
                </script>";
            }
        }
    }
?>