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
<head> <title> Inserting data </title> </head>
<body>
<?php
$sql =" INSERT INTO `student_info` " .
    "( `id` ,`name`, `gender`, `email`, `dob`) ".
  "VALUES(6666, 'Vanessa', 'Female', 'Van@mail.com', '2000-02-02')";
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
   echo "Data succesvol toegevoegd";
 }
//copied 1 row


  ?>
</body>  </hmtl>
  <?php mysqli_close($conn);?>
