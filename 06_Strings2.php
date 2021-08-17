<html>
<head>
<title>string Functions (part-2)!</title>
</head>
<body>
<?php
$msg= "goeie morgen !";
echo $msg; echo "<br />";

echo strlen ($msg); //returns number of char in a string 14?
echo "<br />";

echo str_replace ("goeie", "great", $msg); //neemt 3 argumenten in; vervangt goeie met great
echo "<br />";

echo str_repeat($msg,3); //string msg wordt drie keer herhaald
echo "<br />";

echo substr($msg, 5, 7); /*substr function returns een deel van de originele string. eerste deel
 msg is het eerste arguemnt, tweede arguemetn geeft indez positie aan van de stirn
 het laatste is het aantal char dat je wil zien na het charachter op index zoals aangegegevn
 in 2e argument *///
?>
</body>
</html>
