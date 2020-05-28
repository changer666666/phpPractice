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
	$n2 = "";
	$result = "";
	$method = "+";
	if ( isset($_GET["n1"]) ) {

		$n1 = $_GET["n1"];
		$n2 = $_GET["n2"];
		$result = $n1 + $n2;
		$method = $_GET["select"];

		if ($method == "+") {
			$result = $n1 + $n2;
		} else if ($method == "-") {
			$result = $n1 - $n2;
		} else if ($method == "*") {
			$result = $n1 * $n2;
		} else {
			$result = $n1 / $n2;
		}

		// echo "<br />The result is: ", $result;
	}
	


?>
<body>
	<form action="" method="get">
		Number #1:<input type="text" name="n1" value="<?php echo $n1; ?>">
		<select name="select" value="<?php $method  ?>">
			<option>+</option>
			<option>-</option>
			<option>*</option>
			<option>/</option>
		</select>
		Number #2:<input type="text" name="n2" value="<?php echo $n2; ?>">
		<input type="submit" value="=">
		<input type="text" name="result" value="<?php echo $result; ?>">
	</form>
</body>
</html>