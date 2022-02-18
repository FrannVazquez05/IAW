<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Example</title>
</head>
<body>
	<?php
		$i = 1;
		$n = 50;   
		$impar = 1; 
		while ( $i <= $n){
			echo "$impar, ";
			$i = $i + 1;
			$impar = $impar + 2;
		}
	 ?>

</body>
</html>