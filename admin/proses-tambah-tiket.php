<?php
    if(isset($_POST['submit'])){
        include 'config.php';
        $id_user = $_POST['id_user'];
        $id_wisata = $_POST['id_wisata'];
        $jumlah = $_POST['jumlah'];
        $jenis = $_POST['jenis_tiket'];
        $harga = $_POST['harga'];
        $waktu = date("Y-m-d");
        $cek = mysqli_query($koneksi, "SELECT * FROM tiket WHERE id_wisata='$id_wisata'");
        $putty = mysqli_fetch_assoc($cek);
        $num = mysqli_num_rows($cek);
        $d = $putty['jenis_tiket'];
        $i = $putty['id_wisata'];

        if($i == $id_wisata AND $d == $jenis){
            echo "<script>
                alert('Data Tiket wisata sudah ada silahkan melakukan pengolahan data pada menu Data Tiket Wisata!');
                window.location.href='data-tiket.php';
            </script>";
        }elseif($i == $id_wisata AND $d != $jenis){
            if($jumlah != null){
                $query1 ="INSERT INTO tiket (id_user, id_wisata, jenis_tiket, harga, jumlah, tgl_terbit)
                VALUES ('$id_user','$id_wisata','$jenis','$harga','$jumlah','$waktu')"; 
                $mysqli = $koneksi->query($query1);

                if($mysqli){
                    echo "<script>
                        alert('Data Tiket wisata berhasil ditambahkan!');
                        window.location.href='tambah-tiket.php';
                    </script>";
                }else{
                    echo 'error';
                }
            }else{
                $query1 ="INSERT INTO tiket (id_user, id_wisata, jenis_tiket, harga, jumlah, tgl_terbit)
                VALUES ('$id_user','$id_wisata','$jenis','$harga','Tidak Terbatas','$waktu')"; 
                $mysqli = $koneksi->query($query1);

                if($mysqli){
                    echo "<script>
                        alert('Data Tiket wisata berhasil ditambahkan!');
                        window.location.href='tambah-tiket.php';
                    </script>";
                }else{
                    echo 'error';
                }
            }
        }elseif(mysqli_num_rows($cek) == 0){
            if($jumlah != null){
                $query1 ="INSERT INTO tiket (id_user, id_wisata, jenis_tiket, harga, jumlah, tgl_terbit)
                VALUES ('$id_user','$id_wisata','$jenis','$harga','$jumlah','$waktu')"; 
                $mysqli = $koneksi->query($query1);

                if($mysqli){
                    echo "<script>
                        alert('Data Tiket wisata berhasil ditambahkan!');
                        window.location.href='tambah-tiket.php';
                    </script>";
                }else{
                    echo 'error';
                }
            }else{
                $query1 ="INSERT INTO tiket (id_user, id_wisata, jenis_tiket, harga, jumlah, tgl_terbit)
                VALUES ('$id_user','$id_wisata','$jenis','$harga','Tidak Terbatas','$waktu')"; 
                $mysqli = $koneksi->query($query1);

                if($mysqli){
                    echo "<script>
                        alert('Data Tiket wisata berhasil ditambahkan!');
                        window.location.href='tambah-tiket.php';
                    </script>";
                }else{
                    echo 'error';
                }
            }
        }
    }
?>