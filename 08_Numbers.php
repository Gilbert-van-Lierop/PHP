<html>
<head>
<title>Nummers in PHP!</title>
</head>
<body>
<?php
//const BR = '<BR/>';

$num1=25;
$num2=5;
echo $num1+$num2;  echo "<br />"; //addition
echo $num1-$num2; echo "<br />"; //subtraction
echo $num1*$num2; echo "<br />"; // multiplaction
echo $num1/$num2; echo "<br />"; // devision
echo ++$num1; echo "<br />"; //pre-increment
echo $num1--; echo "<br />"; //post-decrement
echo $num1;

echo "Absolute Value: " . abs(-450); echo "<br />";//returns the absolute (positive) value of a number:
echo "power result: " . pow(2,10); echo "<br />";

echo "random number: " . rand();echo "<br />";
echo "Random number within range: " . rand(30,45); echo "<br />";
echo "Remainder: " .fmod(27,5); echo "<br />";
echo "Square root: "  . sqrt(225); echo "<br />";

?>
</body> </html>
