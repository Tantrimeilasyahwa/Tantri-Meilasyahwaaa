<?php
session_start ();
	$_SESSION['csrf']= base64_encode(openssl_random_pseudo_bytes(32));
?>

<html>
<head>
	<title>Form Logic</title>
</head>

<body>
	<form action="form2.php" method="post">
	<input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>"/>
	<input type="text" name="data"/>
	<input type="submit" name="sub" value="Post"/>

</form>
</body>
</html>