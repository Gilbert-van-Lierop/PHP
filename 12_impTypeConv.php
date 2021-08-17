

<html>


<head>
  <title> impliciete conversie </title>
</head>

<body>
<?php
//Conversion die gebeuert buiten ons
//conversie van string naar int
$var="100";//De sTring waarde van 100, geen int
echo gettype($var);echo "<BR/>";

$var = $var + 44; echo "<BR/>";
echo $var;
echo "<BR/>";
echo gettype($var);echo "<BR/>";

//conversie van int naar string
$num= 1999; echo "<BR/>";
$str= "$num was een heel goed jaar" ;

echo $str; echo "<BR/>";
echo gettype($str);

?>

</body>
</html>
