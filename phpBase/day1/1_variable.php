<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		/*css代码*/
	</style>
	<script>
		// js代码在这里。。。
	</script>
</head>
<body>
	<?php 
		echo "php can show pages";
		echo "<hr >";
		$v1 = 1;
		$v2 = 2;
		$v3 = $v1 + $v2;
		echo $v1, $v2, $v3;
		
		echo "<hr>";
		$result1 = isset($v1);
		var_dump($result1);
		$result4 = isset($v4);
		var_dump($result4);

		//value convey
		echo "<hr >";
		$v2 = $v1;
		$v1 = 100;
		echo "v1:", $v1, "    v2:", $v2;

		//reference convey
		echo "<hr >";
		$v1 = 1;
		$v2 = &$v1;
		$v1 = 100;
		echo "v1:", $v1, "    v2:", $v2;
		$v2 = 200;
		echo "v1:", $v1, "    v2:", $v2;

	?>
</body>
</html>