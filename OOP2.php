<?php
//in OOP2 introduceren we const BR en wat CSS om de boeken, de  .jpg bestanden op het scherm te printen
class Display{
  const BR = '<br />';
var $prijs; //var is een keywoord hoe we variabeolen binnen een class definieren
var $name;
var $photo;
var $dir = 'Boeken/';

public function print_boeken(){
echo "<div style='float: left; margin-right: 40px; '>";
echo "<font size='5px'>{$this->name}</font>".self::BR;//gebruiken we properties binnn "" moeten we {} gebruiekn of anders concatenation
echo "<img src='{$this->dir}{$this->photo}'>".self::BR;
echo '$'.$this->prijs;
echo "</div>";
}
}
$show =new Display; // show wordt de object van een type of Display
$show-> name ='Jane Eyre';
$show-> prijs = 35.99;
$show-> photo = 'Jane Eyre.jpg';
$show-> print_boeken();

$show =new Display; // show wordt de object van een type of game
$show-> name ='1984 geORGE oRWELL';
$show-> prijs = 65.99;
$show-> photo = '1984.jpg';

$show-> print_boeken();

?>
