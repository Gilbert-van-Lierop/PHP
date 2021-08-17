

<html>


<head>
  <title> introdution local variable en functions</title>
</head>

<body>
<?php
// we kunnen onze eigen functions maken

function hello_world()//leeg tussen () geeft aan dat deze funciton geen arguments accepteert
{
  echo "Hallo Wereld!<br />";
}// hiermeer is de function defenitie af er hoeft hier geen semicolon

hello_world();

function power($X)
{
  echo "2 tot de macht {$X} is: " . pow(2, $X);
}

power(10);

 echo "<Br/>";
/*A function in PHP is created using keyword "function" followed by the function name
 which must start with a letter or underscore. We then use round brackets after function's
 name and provide optional arguments within round brackets, separated by comma. Curly brackets
  follow which indicate the start and end of the function's code.
All code that will be performed by the function go inside the curly brackets.*/

/* ->Arguments are variables which are future placeholders for values,
those values will be assigned when the function is called.
 -> Parameters on the other hand are values for those arguments defined in the function.
 Parameters must have values, so they can also be named expressions,
because in PHP an expression is anything that expresses a value.*/

//$one and $two are arguments
function multiply( $one, $two ) //function definition
{
return $one * $two;
}
//5, 5 are called parameters

$multiply_result = multiply( 5, 5 ); //function call
echo $multiply_result;
echo "<BR/>";

//to directly output the result from within the function:
function multiply_print( $one, $two ) {
echo $one * $two. "<BR/>"; //printing values directly
}
multiply_print( 10, 5 );
//output: 50

echo "<Br/>";
//Default Values
//Function's arguments can also have default values, which we assign during function's definition:
function multiply_default($one = 5, $two = 10) {
echo $one * $two;
}
//Now multiply_default() function can be called without specifying any parameters
multiply_default();
//output: 50
echo "<Br/>";
//Passing parameters to a function which has default argument?
multiply_default( 4, 4 );



 ?>
</body>
</html>
