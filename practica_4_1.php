<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Example</title>
</head>
<body>
	<?php
		$i = 0;    
		$s = 0;
		for ($i = 1; $i <= 100; $i++) {
			if (($i % 2) == 1) {
			echo "$i " ;
			$s = $s + $i;
			}
		}
		
		echo "<br>" . "La suma es: " . $s;

	 ?>

</body>
</html>