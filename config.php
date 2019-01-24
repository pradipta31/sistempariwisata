<?php
  $url    = 'http://localhost/sistempariwisata';
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'sistem_pariwisata';
  $koneksi = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
  if( $koneksi->connect_error ){
    die( 'Koneksi ke database gagal : '. $koneksi->connect_error );
  }
  $url = rtrim($url,'/');
 ?>
