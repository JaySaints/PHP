<html>
<head>
	<title>PHP</title>
</head>
<body>

  <form action="sanitize_input.php" method="GET">
    Payload: <input name="payload" type="text" />
    <input name="open" type="radio" /> Stay open? <br/>
    <button type="submit">Enter</button>
  </form>
<?php
  $payload = $_REQUEST['payload'];
  $open = $_REQUEST['open'];

	$referer = $_SERVER['HTTP_REFERER'];
?>

<h4 id="punchline">
	Result: <?= $payload; ?>
	<?php
		if ($referer) {
			$sanitizeInput = filter_var($referer, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
			echo '<!--Referer: ' . $sanitizeInput . ' -->';
		}
	 ?>
</h4>

</body>
</html>
