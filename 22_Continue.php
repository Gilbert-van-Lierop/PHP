<html>
<head>
<title> Continue </title>
</head>
<body>
<?php

/*We maken een arrray variable die hele getallan als elementen heeft, zommige bruek getallen als elementen en sommige string waaarden.
Foreach loop gan we gebruiken om alle elementen in de array te chekkn
Er zijn 2 string waarden hier namleijk Fender en Strat
Vanaf if noemen we de body van de for each loop
Als je de continue value weg haalt dan verwdijnen de strings
*/

$arr=array(10, 15, 20, 23.56, "Fender",11,"Strat");

foreach($arr as $val)
{
	if(gettype($val)=="string")
	{
		continue;
	}
	echo $val;
	echo "<br />";
}
 ?>
</body>

</html>
