
<html>
<head>
<title> Booleans</title>
</head>
<body>
<?php
//boolean data type heeft maar 2 waarden; true of false

$var1 = true; //true of false kan uppercase of lowercase zijn
$var2 = false;
//als een bool waar is zie je 1, als het niet waar is zie je niets
echo "Variable 2: " . $var2; echo "<br />"; //geen tekst bij far 2 beteknt dat t false is
echo "Variable 1: " . $var1;echo "<br />";

//is_bool kijkt als een variabele boolean is
echo "Is dit een boolean? " . is_bool($var1); //is_bool = funciton
echo "<br />";
echo "Is dit een boolean? " . is_bool($var2); //is_bool = funciton

/*
If the PHP code contains a syntax error, the PHP parser cannot interpret the code and stops working.
For example, a syntax error can be a forgotten quotation mark,
a missing semicolon at the end of a line, missing parenthesis, or extra characters.
*/
 ?>
</body>
</html>
