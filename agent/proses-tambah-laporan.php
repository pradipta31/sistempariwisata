<?php
    if(isset($_POST['submit'])){
        include 'config.php';
        $id_kunjungan = $_POST['id_kunjungan'];
        $id_user = $_POST['id_user'];
        $id_wisata = $_POST['id_wisata'];
        $judul = $_POST['judul'];
        $jumlah = $_POST['jumlah_kunjungan'];
        $waktu = date($_POST['waktu']);
        $tahun = date('Y', strtotime($waktu));
        $bulan = date('m', strtotime($waktu));
        $asal = $_POST['asal'];
        $deskripsi = $_POST['deskripsi'];
        $status = 'report';
        // $cek = mysqli_query($koneksi, "SELECT * FROM kunjungan WHERE waktu='$waktu'");
        // $putty = mysqli_fetch_assoc($cek);
        // $num = mysqli_num_rows($cek);
        $error = '';
        $query1 ="INSERT INTO laporan (id_user, id_wisata, judul, jumlah_kunjungan, waktu, tahun, bulan, asal, deskripsi)
        VALUES ('$id_user','$id_wisata', '$judul', '$jumlah', '$waktu','$tahun','$bulan', '$asal', '$deskripsi')"; 
        $mysqli = $koneksi->query($query1);

        $query2 = mysqli_query($koneksi,"UPDATE kunjungan SET status='$status' WHERE id_kunjungan='$id_kunjungan'");

        echo "<script>
            alert('Laporan berhasil dikirim!');
            window.location.href='data-kunjungan-wisata.php';
        </script>";
    }
?>