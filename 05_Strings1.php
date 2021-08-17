
<html>
<head>
<title>string Functions (part-1)!</title>
</head>
<body>
<?php
$first= "goeie morgen ";
$second= ", prettige dag verder";

$third=$first;

echo $third;

echo "<br />";
echo strtoupper($third);

echo "<br />";
$third .= $second;      //

echo strtolower($third);
echo "<br />";

echo ucwords($third);
echo "<br />";

echo $third;
?>
</body>

</html>
