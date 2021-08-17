

<html>


<head>
  <title> Dit zijn PHP Variable Handling functions </title>
</head>

<body>
<?php
const X = '<BR/>';

$movie_name = 'Wan Bon';//String
$release_year = 2000;
$cost_now = 7.96;
$awesome = true;

//gettype Return the type of different variables:
echo "het type van movie_name var is ".gettype( $movie_name )."<BR/>"; //output: string
echo "het type van awsome var is ".gettype( $awesome )."<BR/>"; //output: bool

echo is_int( $release_year ).X; //output: 1
echo is_float( $cost_now ).X; //output: 1

echo "<BR/>";
//Check whether a variable is empty. Also check whether the variable is set/declared
echo isset( $awesome ); //output: 1

echo "<BR/>";
//intval Return the integer value of different varBLES/
//FUNCTion intval();converts a fractional (float) number into an integer
echo intval( $cost_now). "<br>"; //output: 7
$a = 32;
echo intval($a) . "<br>";
$b = 3.2;
echo intval($b) . "<br>";
$c = "32.5";
echo intval($c) . "<br>";

echo "<BR/>";
//Var dump
/*var_dump() function dumps information about one or more variables.
The information holds type and value of the variable(s) */
var_dump( $movie_name ); //output: string(9) "Wan Bon"

$a = 32;
echo var_dump($a) . "<br>";
$b = "Hello world!";
echo var_dump($b) . "<br>";
$c = 32.5;
echo var_dump($c) . "<br>";
$d = array("red", "green", "blue");
echo var_dump($d) . "<br>";
$e = array(32, "Hello world!", 32.5, array("red", "green", "blue"));
echo var_dump($e) . "<br>";
// Dump two variables
echo var_dump($a, $b) . "<br>";

echo "<BR/>";
//unset
unset( $movie_name );
echo $movie_name; //Notice: Undefined variable: movie_name
$a = "Hello world!";
echo "The value of variable 'a' before unset: " . $a . "<br>";
unset($a);
echo "The value of variable 'a' after unset: " . $a;

echo "<BR/>";
//Empty Check whether a variable is empty. Also check whether the variable is set/declared:
echo empty( $movie_name ); //output: 1
echo "<BR/>";
//

$a = 0;
// True because $a is empty
if (empty($a)) {
  echo "Variable 'a' is empty.<br>";
}

// True because $a is set
if (isset($a)) {
  echo "Variable 'a' is set.";
}
?>

</body>
</html>
