<html>
<head>
  <title> Dit is global Scope in PHP, global keyword</title>
</head>
<body>
<?php
$local = "ik hou niet van functions";

function microscope()
{
//local scope
global $local;
//zet global
$local = 'Hallo, ik ben lokaal, ik leef binnen de functie!'."<BR/>";
echo "{$local}<BR/>";
}

//trying to access local variable from a global scope
//echo "{$local}<BR/>"; //Notice: Undefined variable:
microscope(); //output: Hi I'm $local I live only inside the function!

echo $local;
 ?>
</body>
</html>
