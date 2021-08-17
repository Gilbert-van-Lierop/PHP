
<html>


<head>
  <title> introdution functions</title>
</head>

<body>
<?php

/*Arguments by Reference
Whenever we work with data inside the function, that data, will not be available outside of the function,
 unless the value is returned. However, there is another way of keeping whatever data we have modified inside
 the function - passing function arguments by reference!
First, this is what would happen if we didn't pass this one argument by reference: */

function add_text( $string )
{
//.= means concatenate string or add string to a string
$string .= " en soms hou ik van programmeren";
echo $string;
}

add_text("ik hou van eten");
echo "<BR/>";
echo "<BR/>";

$my_text = "My name is Gilbert";
add_text( $my_text);

echo "<BR/>";
echo "<BR/>";

echo $my_text; //outputs: "My name is ";
echo "<BR/>";
echo "<BR/>";
///

function math($num1, $num2)
{
  echo "<b> Multiplication: </b>" . $num1 * $num2 . "<br />";
  echo "<i> Division: </i>" . round($num1 / $num2,2) . "<br />";
  echo "<u> Modulo: </u>" . $num1 % $num2 ."<br />";
}
$a=20; $b=15;
math($a,$b);

echo "<BR/>";
echo "<BR/>";
//Recursion
/* Een recursive function is een function tdat zichzelf roept,
remember to always have an exit when defining such function, otherwise it will run forever (just like an endless loop).
*/
function recursion($a)
{
if ($a <= 20) //exits when $a is greater than 20
{
echo "$a "; echo "<BR/>";
recursion($a + 1);
}
}
recursion(5);
 ?>
</body>
</html>
