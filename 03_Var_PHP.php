
<html>


<head>
  <title> Dit zijn variabelen in PHP</title>
</head>

<body>
<?php
const X = '<BR/>';

 $naam_film = 'Wan Bon'; // dit is eens String data type
 $Datum_Film_uitgebracht = 1999; // integer data type(heel nummer)
 $prijs_nu = 10.00; // double of float (fractie)
 $awesome =false; // boolean data type(waar of false)

 echo "De film $naam_film was uitgebracht in $Datum_Film_uitgebracht en de film kostte $prijs_nu" .X;

 echo 'De film' .$naam_film. ' was uitgebracht in' .$Datum_Film_uitgebracht. 'en de'.X;
 echo "<br />"; //regel overslaan


//
 echo $awesome ? "The movie was Awesome" : "The movie was bad";

 /*  Multi line
? noemen we ternary operators
 comment*/
 ?>
</body>
</html>
