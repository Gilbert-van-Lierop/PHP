<html>
<head>
<title>setting Cookies in PHP</title>
</head>
<body>
<?php
//cookie = informatie die we opslaan aan de client kant
//we gaan een cookie aanmaken die een week gaat bestaan
$name="boodschap";
$value="prettige dag verder";
$expire=time() + 60*60*24*7; //tijd function in seconden, hoe bereken je het aantal seconden in een week?
setcookie($name, $value, $expire); //3 argumenten
//zet je geen expire argument? dan verdwijnt de cookie wanneer je de browser sluit
//expire moet je in seconden aangeven, een timestamp
?>


 </body>

</html>
