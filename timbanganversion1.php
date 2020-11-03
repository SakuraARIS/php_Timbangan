<!DOCTYPE html>
<html>
<head>
	<title>PHP-Timbangan</title>
</head>

<body>
<FORM action="PHP_timbangan.php" method="POST">
	<!-- kesalahan memanggil fail -->
	Masukkan berta anda <input type="TEXT" name="nilai" value="0"/><input type="submit" value="Hasil"/> 
	<!-- kesalahan nilai -->
</FORM>

<?php
if (POST[nilai1]>=80) 
	// kesalahan
{
	$result="Anda Berat";
}
 else{
 	$result="Berat Anda Ialah Normal";
}
>
// kesalahan penutup
Mesej Untuk Anda:
<?php
Echo "$result";
?>
</body>
</html>>