<!DOCTYPE html>
<html>
<head>
	<title>NOMOR 3</title>
</head>
<body>
<?php 
	function Cetak($param){
		for ($i=1; $i<=$param ; $i++) { 
			for ($j=1; $j <=$param ; $j++) { 
				if ($i==1 || $i==$param ||$j%3==0 ){
					echo "+ ";
				}
				else{
					echo "= ";
				}
			}
			echo "<br>";
		}
	}
	Cetak(8);
?>
</body>
</html>