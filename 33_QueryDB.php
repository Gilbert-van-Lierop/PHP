<?php
$host="localhost";
$dbuser="root";
$pass="";
$dbname="student";
$conn=mysqli_connect( $host, $dbuser, $pass, $dbname);
if(mysqli_connect_errno())
{
  die("connectie gefaald! " . mysqli_connect_error());
}
else
{
echo "Gelukt! met => {$dbname}";
}
?>

<html>
<head><title> Quering the databse</title> </head>
<body>
<?php
//onze query opslaan in een variabele
 $sql="SELECT * FROM student_info";
 $res=mysqli_query($conn,$sql);
 /* $res is de variabele die onze resultset weergeeft, het neemt 2 variabelen als argument
  1=> naam connectie var, 2=> argument die de query houdt
met de if kijken we als de query correct is uitgevoerd */
 if(!$res)
 {
   die("Query failed!");
 }
//copied 1 row als alles correct is gaan we naar de while loop
// Deze functie copieert 1 rij van 1 result set
//dat word opgelsagen in $row
 while($row=mysqli_fetch_row($res))
 {
   var_dump($row);// dumps het content van de var op het scherm
   echo "<br /><hr /></br >";
 }

    //echo "NO. of elements: " . count($res); echo "<br />";
//deze functie neemt de variabele waar de result set in zit
//soms zijn resultsets heel groot, en dit kan de server langzaam maken
//Dit gooit memory free nadat de data gebruikt is
 mysqli_free_result($res);
  ?>
  </body>
  </hmtl>

  <?php
  mysqli_close($conn);
  ?>
