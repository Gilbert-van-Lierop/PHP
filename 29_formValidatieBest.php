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
	$name= $_POST['name'];
	$age= $_POST['age'];
	$email= $_POST['email'];
	if (strlen($name)<3)
	{
		echo "de gebruikers naam is te kort";
	}
	elseif (!is_numeric($age)) {
		echo "alleen nummer mag je invoeren";
	}
	elseif (empty ($email)) {
		echo "je hebt niets bij email ingetoetst";
	}
else
{
	echo "je bent succesvol ingelogd";
}
}
?>
 </body>
</html>
