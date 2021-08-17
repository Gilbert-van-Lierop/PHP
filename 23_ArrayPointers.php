<title> array pointers in PHP </title>
</head>
<body>
<?php
	$arr=[11,7,9,5,13,2,16];
	echo current($arr); echo "<br />";
	next($arr);

	echo current($arr); echo "<br />";

	end($arr);
	echo current($arr); echo "<br />";

	reset($arr);
	echo current($arr); echo "<br />";
	echo "<br />";
//
	while(current($arr)!=null) //null en 0
	{
	echo current($arr); echo "<br />";
	next($arr);
	}
 ?>
</body>

</html>
