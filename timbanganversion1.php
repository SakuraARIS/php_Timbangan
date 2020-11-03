<!DOCTYPE html>
<html>
<head>
	<title>PHP-Timbangan</title>
</head>

<body>
<FORM action="PHP_timbangan.php" method="POST">
	Masukkan berat anda <input type="TEXT" name="nilai1" value="0"/>
	<input type="submit" value="Hasil"/> 
</FORM>

<?php
if (POST[nilai1]>=80) 
	
{
	$result="Anda Berat";
}
 else{
 	$result="Berat Anda Ialah Normal";
}
?>

Mesej Untuk Anda:

<?php
Echo "$result";
?>
</body>
</html>
