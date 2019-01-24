<?php
    if(isset($_POST['submit'])){
        include 'config.php';
        $id_user = $_POST['id_user'];
        $id_wisata = $_POST['id_wisata'];
        $jumlah = $_POST['jumlah_kunjungan'];
        $waktu = date($_POST['waktu']);
        $asal = $_POST['asal'];
        // $cek = mysqli_query($koneksi, "SELECT * FROM kunjungan WHERE waktu='$waktu'");
        // $putty = mysqli_fetch_assoc($cek);
        // $num = mysqli_num_rows($cek);
        $error = '';
        $query1 ="insert into kunjungan (id_user, id_wisata, jumlah_kunjungan, waktu, asal)
        VALUES ('$id_user','$id_wisata','$jumlah','$waktu','$asal')"; 
        $mysqli = $koneksi->query($query1);

        echo "<script>
            alert('Data Kunjungan wisata berhasil ditambahkan!');
            window.location.href='tambah-kunjungan-wisata.php';
        </script>";
    }
?>