<html>
<head>
<title> Source page</title>
</head>
<body>
<?php
/*
hoe passeren we waarden van 1 bestand naar een andere?
Hiervoor zijn  er 3 methoden, de query string, forms en cookies
In dit programma gebruiken we de QueryString
We gaan 2 files maken een source.php en een bestemming php
en we gaan de waarden van de 3 variabelen opslaan in een super global die get heet
*/
$name="Jackson";
$age=70;
$email="MJ@hotmail.com";

$str="name=$name & age=$age & email=$email";//ampersand symbool wordt gebruikt om de waarden te scheiden ,
// wanner we meerdere waarden versturen

 ?>
<!-- de query String -->
 <a href="26_Bestemming.php? <?php echo $str; ?>"> De Hele Bestemming</a >

</body>

</html>
