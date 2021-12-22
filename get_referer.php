<html>
<head>
	<title>PHP</title>
  <meta charset="utf-8"></meta>

</head>
<body>
<?php
	echo "<h1>GET REFERER</h1>" ;

	#$input = $_GET["input"];
	#echo 'Hello ' . htmlspecialchars($html) . '<br/>';
  #echo $_SERVER['HTTP_HOST'] . '<br/>';

  $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'NOT_HTTP_REFERER';
  echo $referer . '<br/>';
  echo $_SERVER['HTTP_HOST'] . '<br/>';
  echo $_SERVER['HTTP_USER_AGENT'] . '<br/>';


?>
</body>
</html>
