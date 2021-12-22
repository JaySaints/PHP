<html>
<head>
	<title>PHP</title>
</head>
<body>

  <form action="submit_form.php" method="GET">
    Payload: <input name="payload" type="text" />
    <input name="open" type="radio" /> Stay open? <br/>
    <button type="submit">Enter</button>
  </form>
<?php
  $payload = $_REQUEST['payload'];
  $open = $_REQUEST['open'];

  echo '<h4>';
  echo 'Result: '. $payload . ' ';

  $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'NOT_HTTP_REFERER';
  echo  '<!-- ' . $referer . ' -->';

  echo '</h4>';
?>

</body>
</html>
