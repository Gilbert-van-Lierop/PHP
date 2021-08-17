
<html>
<head>
<title> break </title>
</head>
<body>
<?php

/*breka laat ons uit de loop breaken
De for loop heeft een controle variabele val, deze heeft een initiele waarde van 1
De test conditie van de loop is tot 20,
*/
	for($val=1;$val<=20;$val++)
{
	if($val==15)
	{
	//	break;
		Continue;
	}
echo "{$val} <br />";
}
echo "<br />";
echo " we zijn uit de loop";
 ?>
</body>

</html>
