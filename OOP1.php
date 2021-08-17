<?php
class Display{

var $prijs; //var is een keywoord hoe we variabeolen binnen een class definieren
var $name;
var $photo;
var $dir = 'Boeken/';

public function print_boeken(){
echo $this->name; echo "<Br>";//-> object operator
echo $this->prijs; echo "<Br>";
echo $this->dir.$this->photo;
}
}

$show =new Display; // show wordt de object of instance van de Display class

$show-> name ='Jane Eyre';
$show-> prijs = 35.99;
$show-> photo = 'Jane Eyre.jpg';

$show-> print_boeken();// hier roepen (call) we de method outside of the class


?>
