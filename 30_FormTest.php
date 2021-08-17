<html>
<head>
<title> <?php echo "Ik presenteer de informatie!"; ?> </title>
</head>
<body>

<?php
// $_REQUEST is used to collect data after submitting an HTML form
echo "Ik weet hoe je heet " . $_REQUEST['name'], "<br />";
echo "You woont in " . $_REQUEST['address'] . " En jouw hoofdstad is "
.$_REQUEST['city']. " en jouw district is ".
 $_REQUEST['state'] ."<br />";

# if conditionals
echo "Kies een nummer tussen 1 en tien, ik heb een favo nummer ";
$numGuessed = (int) $_POST['number'];

# verschillende condities gaan we vergelijken met AND OR XOR (NOT PROVIDES THE OPPOSITE)
if (( $numGuessed == 5 ) AND ( $numGuessed < 11))
{
echo "Je hebt goed gegokt<br />";
}
elseif ( $numGuessed > 5 )
{
echo "Too High<br />";
}
else
{
echo "Too Low<br />";
}
echo "<br />";

# hier kunnen we een swithc statement gebruiken
$favPet = $_POST['pet'];
switch($favPet) {
case "Honden" :
echo " je favoriet dier zegt Woof woof";
break;
case "katten" :
echo "je favoriet dier zegt Meow";
break;
case "vissen" :
echo "je favoriet dier zegt Bubble";
break;
default:
echo "je hebt wat anders opgegeven Grrrr";
}

echo "<br />";

// Huiswerk, maak een if statement, die gaat kijken
// als een getal tussen 1 en 10 is ingevuld


?>
</body>
</html>
