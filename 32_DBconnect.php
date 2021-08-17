<?php
$host="localhost";
$dbuser="root";
$pass="";
$dbname="student";
$conn=mysqli_connect($host, $dbuser, $pass, $dbname);
//The connect() / mysqli_connect() function opens a new connection to the MySQL server.
if(mysqli_connect_errno())
//Return an error code from the last connection error, if any:
{
  die("connectie gefaald! " . mysqli_connect_error());
}
else
{
echo "Connected met database {$dbname} is wel gelukt, de gerbuiker log in is {$dbuser}";
}

?>
<html>
<head> DB connectie </head>
<body>

</body>
</hmtl>

 <?php
mysqli_close($conn);
  ?>
