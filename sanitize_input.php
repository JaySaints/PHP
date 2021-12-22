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
			echo '<!-- ' . $referer . ' -->';
		}
	 ?>
</h4>




</body>
</html>
