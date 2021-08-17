<html>
<head>
<title> Bestemming page </title>
</head>
<body>

<?php
	$name=$_GET['name'];//name, age en email zijn de keys, waarmee we de waarde pakken
	$age=$_GET['age'];
	$email=$_GET['email'];

	echo "Name: {$name}<br />";
	echo "Age: {$age}<br />";
	echo "Email: {$email}<br />";
 ?>
</body>

</html>
