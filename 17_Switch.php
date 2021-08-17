
<html>
<head>
<title> switch </title>
</head>
<body>
<?php
//staat voor operator, sitch gaat na of de warde in op in van de cases voorkomt
//komt hij niet voor krijg je default
//om switch te gebruiekn moet je switch intypen en tussen haakjes de operator
//Is een andere descision construct het is een alternatief voor de if consturct, waar je siwtch zou willen gebruiken in plaats van if is waar je directe vergelijkingen wil maken tussen waarden. Bijvoorbeeld als je een volle funcite calculator wil maken, dus gebaseerd op de imput wordt code uitgeoverd


$x=15; $y=10;
$op='*';

switch($op)
{
case '+':
	echo $x+$y;
	break;//helpt ons te breken uit de construct
case '-':
	echo $x-$y;
	break;
case '*':
	echo  $x*$y;
	break;
case '/':
	echo  $x/$y;
	break;
case '%':
	echo  $x%$y;
	break;
default:
	echo "invalid operator";
}


 ?>
</body>

</html>
