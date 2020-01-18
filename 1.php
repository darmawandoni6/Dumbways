<!DOCTYPE html>
<html>
<head>
	<title>NOMOR 1</title>
</head>
<body>
	<?php
	$gaji_pertama = 3000000;
	$bunga =2.5/100; 
		for ($x = 1; $x <= 12; $x++) {
			$total = ($gaji_pertama + ($gaji_pertama * $bunga));
		     
		     echo "<br>Gaji ".$x.' --> '.  number_format($total).'</br>';

			$gaji_pertama = $total;
		}
	?>
		
</body>
</html>