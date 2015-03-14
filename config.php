<?php
/**
 * Nama File : Config.php
 * File Ini berisi beberapa data penting seperti
 * Data koneksi ke database
 * Secret Kode
 * dan data lain yang nantinya akan digunakan secara terus-menerus
 */
 
 $url = 'http://localhost/webkita';

 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $dbname = 'database_kita';

 $connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

 if( $connect->connect_error )
 {
 	die( "Sambungan gagal " . $connect->connect_error);
 }
 
 
 ?>
