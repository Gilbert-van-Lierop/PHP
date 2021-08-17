<html>
<head>
<title> Logical Operators </title>
</head>
<body>
<?php
/* 3 logical operators in php
Logical AND, logical OR en Logical NOT
*/
$num=52;
if(($num>0)&&($num%2==0))//om te kijke als het even is of niet gebruiekn we module operator
{
	echo "the number is positive as well as even";
	echo "<br />";
}
if(($num>0)||($num%2==0))
{
echo "The number is positive or even or both";
echo "<br />";
}

if(!($num)>0||($num%2==0)) //als het niet gelijk aan 0 is is het positive
{
echo "The number is positive or even or both";
	echo "<br />";
}
if(!($num<0))
{
	echo "then number is positive";
}


 ?>
</body>
</html>
