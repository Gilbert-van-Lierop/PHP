<html>
<head>
<title>string Functions (part-2)!</title>
</head>
<body>
<?php
$msg="have a nice day";
echo $msg;
echo "<br />";

echo strstr($msg, "nice");/* het wijst je het resultaat en doet dit door een
waarde aan te geven en displayed het vanaf het gevonden woord*/
echo "<br />";

echo strpos($msg, "nice");/* vind de index positie van het woord dat staat aangegeven*/
echo "<br />";

echo strchr($msg, 'i'); /* zoekt naar de eerste occurrence van een charcter en geeft
de rest van de tekst weer resultaat = ice day */
?>
</body>
</html>
