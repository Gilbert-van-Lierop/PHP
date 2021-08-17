<html>
<head>
<title> National Operators </title>
</head>
<body>
<?php

$x=15;
$y=210;
$z="15";// 15 maar van String typy

if ($x==$y)
{
echo "the numbers are equal!<br />";
}
elseif($x!=$y)
{
	echo "The numbers are not equal!<br />";
}

// 2e if

if($x<$y)
	{
		echo "X is less than Y!<br />";
	}
else
{
		echo "y is less than X! <br />";
}

//3e if
if($x==$z)
{
	echo "Xis equal to z!<br />";
}
if($x===$z)
{
	echo "X is equal to z and they are of the same type!";
}

 ?>
</body>
</html>
