<html>
<head>
<title>Form Source</title>
</head>
<body>
<!-- gaat na als de submit button op gedrukt wordt
-->
<?php
if(isset($_POST['submit']))
{
	echo "Name: {$_POST['name']} <br />";
	echo "Age: {$_POST['age']}  <br />";
	echo "Gender: {$_POST['gender']}  <br />";
	echo "Email: {$_POST['email']}  <br />";
}
else{
	echo "er is niet op de Submit knop gedrukt";
}
?>

 </body>

</html>
