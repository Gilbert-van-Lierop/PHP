
<html>
<head>
  <title> introductie local variable en functions</title>
</head>
<body>
<?php
function microscope()
{
//local scope
$local = 'Hallo, ik ben lokaal, ik leef binnen de functie!';
echo $local;
}
//trying to access local variable from a global scope
microscope(); //output: Hi I'm $local I live only inside the function!
echo "<BR/>";

echo $local; //Notice: Undefined variable: local, de variabel bestaat niet buiten de function


 ?>
</body>
</html>
