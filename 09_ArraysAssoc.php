
<html>
<head>
<title> Associative Arrays</title>
</head>
<body>
<?php
/*in een assoc array heb je keys die strings zijn, ze dienen als indices met corrosponderende waarden, het is net eem
telefoonboek. je hebt key value relationships as individuele items, als een telefoon boek waar je
namen en nummers en email adressen van mensne op wil slaan. de waarden zijn de email etc*/
const Z = '<BR/>';

$people = array('Wallace' => 21, 'Victoria' => 22, 'Roman' => 33, 'Alex' => 35, 'Sarah' => 28);
print_r( $people );
echo Z ;

//mixed array, niet numeriek of assosietief, het kan beiden zijn
$random = array('Keanu Reeves', 'movie' => 'The Matrix', 1999, 5 => "I'm confused", "Hi there");
print_r($random);
echo Z ;

$arr = array("name"=>"John", "email"=>"john@gmail.com"); //2 key value realtionships name= john etc
echo "Name: " . $arr["name"];  echo Z; //fetches name
echo "Email: " . $arr["email"];  echo Z;


//meer dan 1 assoc array in een array, maar meerdere warden
/* eerste array heeft index van nul , tweede heeft een index van 1*/
$myarr=array(array("name"=> "John", "email"=>"john@gmail.com")
			,array("name" => "Jack", "email"=>"jack@gmail.com"));
			echo $myarr[0]["name"];  echo "<br />";//deze array is index positie 0
			echo $myarr[0]["email"];  echo "<br />";
			echo $myarr[1]["name"];  echo "<br />";//deze array is index posistie 1, eerste bracket is index positie en de tweede houdt de key
			echo $myarr[1]["email"];  echo "<br />";

 ?>
</body>
</html>
