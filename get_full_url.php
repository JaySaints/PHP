<html>
<head>
	<title>PHP</title>
</head>
<body>
<?php
	echo "<h1>GET FULL URL</h1>" ;

	$full_url = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
	echo $full_url . '<br/>';

	/* Param @input get the value in the url
	 * http://localhost/get_full_url.php?input=value */
	$input = $_GET["input"];
	#echo 'Hello ' . htmlspecialchars($input) . '<br/>';

	$inputEncoded = urlencode($input);
	#echo $inputEncoded . '<br/>';

	$inputDecoded = urldecode($inputEncoded);
	#echo $inputDecoded . '<br/>';

?>
</body>
</html>
