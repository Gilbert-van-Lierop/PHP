
<html>
<head>
<title> If statement </title>
</head>
<body>
<?php
//If is een selectie consturct

$x=20;// int datatype
$y=5; // int datatype

if ($x>$y)
{
echo "{$x} is groter than {$y}";
}
echo "<BR/>";

//2e IF statement
if ($x<$y)
{
echo "{$x} is less than {$y}";
}
else {
  echo "iets klopt niet";
}
echo "<BR/>";

//elseif , met elseif kunnen we meedere sccenarios bekijke
$x=15;
$y=15;
if ($x>$y)
{
echo "{$x}  is groter then {$y}";
}
elseif($x<$y)
{
	echo "{$x} is less than {$y}";
}
elseif($x==$y)
{
	echo "{$x} is gelijk aan {$y}";
}
else
{
echo "iets klopt niet";
}

 ?>
</body>
</html>
