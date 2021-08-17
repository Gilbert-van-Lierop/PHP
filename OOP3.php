<?php
//oop3 gaan we onze code versimplene met een set function
//hier introduceren we const BR
class Display{
  const BR = '<br />';
var $prijs; //var is een keywoord hoe we variabeolen binnen een class definieren
var $name;
var $photo;
var $dir = 'Boeken/';

public function print_boeken(){
echo "<div style='float: left; margin-right: 40px; '>";
echo "<font size='5px'>{$this->name}</font>".self::BR;
echo "<img src='{$this->dir}{$this->photo}'>".self::BR;
echo '$'.$this->prijs;
echo "</div>";
}
public function set_boek($name,$prijs,$photo){
  $this->name = $name;
  $this->prijs = $prijs;
  $this->photo = $photo;
}
}

$show =new Display; // game wordt de object van een type of game /**
$show-> name ='Jane Eyre';
$show-> prijs = 35.99;
$show-> photo = 'Jane Eyre.jpg';
$show-> print_boeken();
/*
$show =new Display; // game wordt de object van een type of game /**
$show-> name ='1984 geORGE oRWELL';
$show-> prijs = 65.99;
$show-> photo = '1984.jpg';
$show-> print_boeken();
*/
$x =new Display;
$x->set_boek("geORGE oRWELL",65.99,"1984.jpg");
$x-> print_boeken();

$y =new Display;
$y->set_boek("three Musketeers",99.99,"3Musketeers.jpg");
$y-> print_boeken();

?>
