<?php
/**
 * Nama File : Simpan.php
 * Fungsi    : Untuk Menghandle aksi simpan data. 
 * ===============================================*/

// Sisipkan file config.php ke dalam file simpan.php
require __DIR__. '/config.php';

/**
 * check apakah ada aksi $_POST( lihat method="post") dengan Nama Save ( button name="save") ;
 */
if( isset($_POST['save']) ) 
{
	// jika ada
	$nama  = trim($_POST['namaanda']); // dari <input name="namaanda" ...>
	$email = trim($_POST['emailanda']); // dari <input name="emailanda" ...>
	
	/** trim() digunakan untuk menghapus spasi kiri dan kanan*/
	
	// validasi saat penginputan data
	if( strlen($name) < 1 ) // jika kolom nama kosong
	{
		echo "Maaf kolom Nama Harus di isi terlebih dahulu";
	}elseif( strlen($email) < 1) // jika kolom email kosong
	{
		echo "Maaf Kolom Email Harus di isi";
	}else{
		
		// mulai eksekusi penyimpanan
		$sql = "INSERT INTO users ('nama','email') VALUES ('$nama','$email')";

		$simpan = $connect->query($sql);
		
		if( !$simpan ) // jika gagal disimpan
		{
			echo "terjadi error karena : ". $connect->error;
		}
	}
	
	// tutup database
	$connect->close();

	echo "<a href='{$url}'> kembali kehalaman depan</a>"; 

}else{ // jika tidak ada aksi post atau pengiriman data maka akan dikembalikan ke halaman depan
	
	header('location:'.$url);

}

?>