
<html>
<head>
<title> foreach loop </title>
</head>
<body>
<?php
/*
Foreach Deze loop is bedoelt om te werken met arrays

$num  kan je alles noemen het is een dommie valuable die bij elke instantie van een loop
De volgende waarde aanneemt.
2 keywords Foreach en as. $num is een dommie variabel

bij deze loop is er geen update variable
*/
$arr=array(1,4,9,16,25,36);

foreach ($arr as $num)
{
	echo "square: " . $num;
	echo "<br />";
}

 ?>
</body>

</html>
