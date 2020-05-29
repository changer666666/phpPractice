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
	$n1 = "";
	$result = "";
	$method = "";
	if ( isset($_GET["number"])) {
		$n1 = $_GET["number"];
		$method = $_GET["select"];

		if ($method === "10 to 2") {
			$result = decbin($n1);
			echo "result is :   0b" . $result;
		} else if ($method === "10 to 8") {
			$result = decoct($n1);
			echo "result is :   0" . $result;
		} else {
			$result = dechex($n1);
			echo "result is :   0x" . $result;
		}
	}
?>
<body>
	<form>
		Number: <input type="text" name="number"/>
		<select name="select">
			<option <?php if ($method ==="10 to 2"){ echo "selected"; } ?>>10 to 2</option>
			<option <?php if ($method ==="10 to 8"){ echo "selected"; } ?>>10 to 8</option>
			<option <?php if ($method ==="10 to 16"){ echo "selected"; } ?>>10 to 16</option>
		</select>
		<input type="submit" value="transfer"/>
	</form>
	
</body>
</html>