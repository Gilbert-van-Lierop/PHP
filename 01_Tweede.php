<HTML>
<HEAD>
<TITLE>Ons Tweede PHP bestand</TITLE>
</HEAD>
<BODY>

  <?php
  //Wat zijn variabalen in php, Data types in PHP
$Film_naam = 'Inception'; // data type Strings
$Film_Uitgebracht = 2011; //is_integer
$Prijs_Film_Kaart = 50.55; //Float of Double
$Was_Goed = False; //BOOL = 0
$Was_Goed = True; // Bool = 1


echo $Film_naam; echo "<BR/>";
echo $Film_Uitgebracht; echo "<BR/>";
echo $Prijs_Film_Kaart; echo "<BR/>";
echo $Was_Goed; echo "<BR/>";

//interpolation: het plaatsen van variable namen in een PHP String
echo "de $Film_naam ben ik gaan zien in de bioscoop,
 De film was uitgebracht op $Film_Uitgebracht";
echo "<BR>";
//Concatenation
echo 'de' .$Film_naam. 'ben ik gaan zien in de bioscoop,
De film was uitgebracht op' .$Film_Uitgebracht. "sdfubseifnweiofweopfe";

//Regel overslaan in PHP
echo "<BR/>"; //
echo 'de' .$Film_naam. 'ben ik gaan zien in de bioscoop \n , De film was uitgebracht op' .$Film_Uitgebracht. "sdfubseifnweiofweopfe";
echo "de $Film_naam ben ik gaan zien in de bioscoop  \n , De film was uitgebracht op $Film_Uitgebracht";

/*
echo strlen("Hello world!");
echo gettype($Film_naam);echo "<BR/>";
echo gettype($Prijs_Film_Kaart);echo "<BR/>";
echo gettype($Film_Uitgebracht);echo "<BR/>";
echo is_int($Film_Uitgebracht);echo "<BR/>";//0 voor niet waar of 1 voor waar
echo is_float($Film_naam); echo "<BR/>"; //antwoord zal o of 1 zijn, in dit geval 0
echo var_dump($Film_naam); echo "<BR/>";
unset ($Film_naam); echo "<BR/>";
echo $Film_naam; echo "<BR/>";
*/
   ?>


</BODY>

</HTML>
