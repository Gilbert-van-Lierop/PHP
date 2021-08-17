<html>
<head>
<title> <? php echo “Ik accepteer de informatie”; ?> </title>

	<style type="text/css">
	#text{
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}
	#button{
		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}
	#box{
		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
</style>
</head>
<body>
<form action="http://localhost/PHP/30_FormTest.php" method="post">

<p>Name:
<input id="text" type="text" name="name" size="30"  value=""/>
</p>

<p>Adress:
<input id="text"  type="text" name="address" size="30" value="" />
</p>

<p>City:
<input id="text"  type="text" name="city" size="25" value=""/>
</p>

<p>State:
<input id="text"  type="text" name="state" size="25" value="" />
</p>

<p>Kies een nummer tussen 1 to 10:
<input id="text" type="text" name="number" size="25" value="" />
</p>

<p>Hou je van katten, honden of vissen... Kies eentje:
<input id="text"  type="text" name="pet" size="25" value="" />
</p>

<p>Print een getal tussen 1 en 10:
<input id="text"  type="text" name="teltot" size="30" value="" />
</p>

<p>
<input id="button"  type="submit" name="submit" value="Send" />
</p>

</form>
</body>
</html>
