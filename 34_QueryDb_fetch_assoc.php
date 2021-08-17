<?php
$host="localhost";
$dbuser="root";
$pass="";
$dbname="student";
$conn=mysqli_connect($host, $dbuser, $pass, $dbname);
//mysqli_connect neemt 4 argumenten
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
<head> DB connectie </head>
<body>
<?php

 $sql="SELECT * FROM student_info";
 $res=mysqli_query($conn,$sql);

 /* $res gebruiken we als een variabele die onze resultset weergeeft
  1=> naam connectie var, 2=> argument die de query houdt
 */
 if(!$res)
 {
   die("Query failed!");
 }
//verschil tussen fetch_assoc en mysqli_fetch_row
//dit geeft data terug in de vorm van een associative arrays
//Dit geeft ons de mogelijkheid dat beter te vertonen

 while($row=mysqli_fetch_assoc($res))
 {
    foreach($row as $key=>$val)
    {
      echo "<br/>";
      echo "($key): " . "{$val}<br />";
}
   echo "<br /><hr /></br >";
 }
 mysqli_free_result($res);
  ?>
  </body>
  </hmtl>
  <?php mysqli_close($conn);?>
