<html>
<head>
<title>Form Source</title>
</head>
<body>
<form action="28_FormBestemming.php" method="post">
<!-- action= waar je naar toe wil sturen
 method = post superglobal geen get superglobal
 de name attribuut is zeer belangrijk, we koppelen de name attribuut
-->
Name:
<input type="text" name="name" /><br /> <br />
Age:
<input type="text" name="age" />
<br /><br />
Gender:
<br /><br />
Male<input type="radio" name="gender" value="male"/>
<br /><br />
Female
<input type="radio" name="gender" value="female"/>
<br /><br />
Email:
<input type="text" name="email"/>
<br /> <br />

<input type="submit" name="submit" />

</form>

 </body>

</html>
