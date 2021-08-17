<?php
$host="localhost";
$dbuser="root";
$pass="";
$dbname="student";
$conn=mysqli_connect($host, $dbuser, $pass, $dbname);
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
<head> <title> Update data in tabellen </title> </head>
<body>
<?php
$sql ="DROP TABLE student_info ";

$res=mysqli_query($conn, $sql);

 /* $res is de variabele die onze resultset weergeeft
  1=> naam connectie var, 2=> argument die de query houdt
 */
 if(!$res)
 {
   die("Query failed!");
 }
 else
 {
   echo "TABEL bestaat niet meer!";
 }
//copied 1 row


  ?>
</body>  </hmtl>
  <?php mysqli_close($conn);?>
