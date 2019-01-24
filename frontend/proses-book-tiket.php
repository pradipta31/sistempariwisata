<?php
    if(isset($_POST['submit'])){
        include 'koneksi.php';
        $id_wisata = $_POST['id_wisata'];
        $pax = $_POST['pax'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $handphone = $_POST['handphone'];
        $alamat = $_POST['alamat'];
        $tgl_pesanan = date($_POST['tgl_pesanan']);
        $tanggal = date("Y-m-d");
        
        $error = '';
        $query1 ="INSERT INTO pemesanan (id_wisata, nama, email, handphone, alamat, tgl_pesanan, pax, tanggal)
        VALUES ('$id_wisata', '$nama','$email','$handphone', '$alamat', '$tgl_pesanan', '$pax', '$tanggal')"; 
        $mysqli = $koneksi->query($query1);

        if($mysqli){
            echo "<script>
                alert('Pemesanan anda akan segera di proses dan akan segera kami hubungi melalui email atau nomor telepon anda! ');
                window.location.href='pesanan-saya.php';
            </script>";
        }
    }
?>