<html>
<head>
<title> foreach loop with associative arrrays</title>
</head>
<body>
<?php
/*
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
*/
$arr=array(array("Name"=> "Roger Federer",	"Country"=> "Switserland",
	"Rank"=> 3),
	array(	"Name"=> "Rafael Nadal",	"Country" => "Spain",
	"Rank"=> 2));

	//Nesting loop
foreach($arr as $var) //$var = paceholder
{
	foreach($var as $x=>$y) //hier 2 placeholders
	{
			echo " <b> $x </b>: $y"; //		echo "<b> $x </b>: $y";
			echo "<br />";
	}
	echo "<br />";

}

 ?>
</body>

</html>
