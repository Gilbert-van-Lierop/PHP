<HTML>
<HEAD>
<TITLE> Arrays </TITLE>
</HEAD>
<BODY>

  <?php
//$mensen = array();
//$mensen is een variabele en array() is een keyword
$nummers =array( 42, 15, 13, "een string");
print_r ($nummers);
echo "<BR/>";
/* http://localhost/PHP/09_Arrays.php
Antwoord
Array ( [0] => 42 [1] => 15 [2] => 13 [3] => een string )
*/
echo $nummers;//Notice: Array to string conversion in call stack
echo $nummers[0];//antw
echo "<BR/>";
echo $nummers[3];//het laatse element van de aray op me scherm?? hoe doe ik dat
echo "<BR/>";
//hier creeren wij onze eigen keys, daarboven creert PHP automatishe keys
$nummers2 = array(0 => 100, 1 => 10000, 2 => 7000);
print_r ($nummers2);


//Array in een array
$mijnArray = [4,10,15,[100,1000,10000]];
print_r ($mijnArray);
echo $mijnArray [3][1];
echo $mijnArray [3][2];
   ?>


</BODY>

</HTML>
