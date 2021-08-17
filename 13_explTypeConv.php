<html>

<head>
<title> Explicit Type conversion </title>
</head>
<body>
<?php
$var= "45";
// gebruiek we om expliciet de var tyoe te verander
//settype funciton veranndert de data type naar wat ander op expliciete wijze
//eerste arg is de naam van de var die we willen veradneren
settype($var, "integer");
echo $var; echo "<br />";
echo gettype($var); echo "<br />";

//andere methode
$num = 99;
//stel ik wil een nieuwe var gebruiekn en ik wil 99 gebruiek als een String

$x = (string)$num;
echo gettype($num); echo "<br />";//dit blijft een int, want de waarde is niet veranderd
echo gettype($x); echo "<br />";
 ?>
</body>
</html>
