<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Example</title>
</head>
<body>
	<?php
		$m = 0;
		for ($i = 1; $i <= 50; $i++) {
			$m = $i * $i;	
			echo "$i x $i = $m" . "<br>";
		}
		
	 ?>

</body>
</html>