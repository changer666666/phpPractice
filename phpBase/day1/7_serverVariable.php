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
	echo "<br />Your webpage address:   ", $_SERVER["PHP_SELF"];
	echo "<br />Your server name:   ", $_SERVER["SERVER_NAME"];
	echo "<br />Your server IP address:   ", $_SERVER["SERVER_ADDR"];
	echo "<br />Your physical ducument root:   ", $_SERVER["DOCUMENT_ROOT"];
	echo "<br />Your client IP address:   ", $_SERVER["REMOTE_ADDR"];
	echo "<br />Your webpage address:   ", $_SERVER["SCRIPT_NAME"];

	echo "<br />Current menu:    ", __DIR__;
	echo "<br />Current path:    ", __FILE__;
	echo "<br />Current line number:    ", __LINE__;
	echo "<br />Current line number:    ", __LINE__;
	echo "<br />Current line number:    ", __LINE__;
?>
<body>
	
</body>
</html>