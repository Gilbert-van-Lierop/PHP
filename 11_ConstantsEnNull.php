<html>
<head>
<title> null Values and Empty Method en Constants </title>
</head>
<body>
<?php

const br = "<BR/>";

//null valueas zijn eigenlijk niks
$var=null;

//$var=0; //zero betkent geen null het betekent zero. wat als je de waarde van null verandert naar 0
echo $var;
echo "<BR/>";
echo br;///hier ga je niks zien


echo "is Null?" . is_null($var); echo br ;
echo "is empty? " . empty($var); echo br;//chekt als var null is of zero


//Constant
define("YEAR", 2014);
echo YEAR;

$YEAR=2015;
echo br ;
echo YEAR;

 ?>
</body>
</html>
