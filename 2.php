<!DOCTYPE html>
<html>
<head>
	<title>
NOMOR 2
	</title>
</head>
<body>
	<?php 
		
		$data = 'DUMBWAYSDOTID';//        0    4    3   10    5    7    1    2    9    6    8   11   12
        $arr = array('Keren', 'D', 'W', 'B', 'T', 'A', 'S', 'U', 'M', 'O', 'Y', 'D', 'I', 'D', 'Sekali');

        echo "array sebelum di sort <br>";
		foreach ($arr as $item) {
			echo  ' ' . $item;
		}

		echo '<br><br>';
		$i = 0;
		$x = 0;
            $temp = "";
            while ($i <= strlen($data) -1)
            {
                if ($data[$i]== $arr[$x])
                {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$x];
                    $arr[$x] = $temp;

                    $i++;
                    $x = $i;
                }
                else{
                    $x++;
                }
            }
            echo "array sesudah di sort <br>";
		foreach ($arr as $item) {
			echo  ' ' . $item;
		}
	?>
</body>
</html>