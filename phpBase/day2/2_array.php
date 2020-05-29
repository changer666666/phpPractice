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
<?php
	$a1 = array(1, 2, 3, 4);
	$a2 = array('name' => 'zhangsan', 'age' => 18, 'gender' => 'female');

	$a2['gender'] = 'male';

	echo "<br>a2 name is : ". $a2["name"];
	echo "<br>a2 age is : ". $a2["age"];
	echo "<br>a2 gender is : ".$a2["gender"];

	echo "<br><pre>";
	print_r($a1);
	echo "</pre>";
	echo "<br><pre>";
	print_r($a2);
	echo "</pre>";
?>
<body>
	
	
</body>
</html>