<?php
/** ini adalah file yang akan pertama kali diakses ketika alamat website dikunjungi */

?>

<form action="<?php echo $url;?>/simpan.php" method="post">

	Nama :	<input type="text" name="namaanda" placeholder="Tuliskan Nama Anda" />
	<br>
	E-mail : <input type="email" name="emailanda" placeholder="Tuliskan E-mail Anda" />
	<br>
	<button name="save">Simpan</button>
</form>