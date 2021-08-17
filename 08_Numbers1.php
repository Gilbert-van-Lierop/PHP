<html>
<head>
<title> numbers (part-2)!</title>
</head>
<body>
<?php

$mynum = 15.6589;
$yournum = 15.44544;
echo "round is " .round($mynum, 2); echo "<br />"; //afgerond naar 2 digits, rounds a floating-point number to its nearest integer
echo ceil($mynum); echo "<br />";
echo ceil($yournum); echo "<br />";
echo floor($mynum); echo "<br />"; //next lowest integer

echo is_int($mynum); echo "<br />";/* is een test vraagt  php als de waarde die vast staat
in mynum een integer of niet? het geeft o als antwoord als het antwoord nee is of 1 als het antwoord
ja is */
echo(abs(-9.9));  echo "<br />";// returns 9.7, returns the absolute (positive) value of a number:
echo is_float($mynum); echo "<br />";
echo is_numeric($mynum); echo "<br />";

// Cast float to int
$x = 444.823;
$new_x = (int)$x;
echo $new_x;//444

echo "<br>";

// Cast string to int
$x = "22342.554";
$new_x = (int)$x;
echo $new_x;//22342
?>
</body>
</html>
