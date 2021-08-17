<html>
<head>
<title> Array Functions </title>
</head>
<body>
<?php


$arr=array(15,10,3,19,7,62,8,5,12);
echo "No. of elements: " . count($arr); echo "<br />";
echo "Maximum value: " . max($arr); echo "<br />";
echo "Minimum value: " . min($arr); echo "<br />";

echo "sorted: ";
sort($arr); //sort en rsort function, implode fundtion maakt een string uit een array

print_r($arr); echo "<br />";
echo "Reverse Sorted: ";
rsort($arr);

echo "<br />";
$str=implode('/', $arr);// implode = function, maakt een string van array- is limimter of scheiding, het gaat de waarden pakken van de reverse array en deze op het scherm printen als een string met – als scheiding
echo $str; echo "<br />";

//je kan ook een array maken van een HttpQueryString
$vowels="A E I O U";// de string variabele heet wobbles en het heeft de characters a I o etc
//print_r print het uit, dus is daarom nested
print_r(explode(" ", $vowels)); echo "<br />";

//in_arra function
/*We kunnnen ook zoeken in array, we moeten de function in_array, deze checkt als een waarde in een array voorkomt
komt het niet voor krijgen we geen antowwrd, komt het wel voor krijgen we 1*/
echo in_array(26, $arr); echo "<br />";
echo in_array(10,$arr); echo "<br />";

 ?>
</body>
</html>
