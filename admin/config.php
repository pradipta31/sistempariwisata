<?php 
    $koneksi = mysqli_connect('localhost','root','','sistem_pariwisata');
    if(!$koneksi){
        echo "Koneksi database gagal!";
    }
?>