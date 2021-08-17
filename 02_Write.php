<html>
<head>
  <title> Text Bestanden openen en bewerken</title>
</head>

<body>
<?php
// run in cmd
//code om onze output in a new text file te schrijven called newfile.txt
// X, R ,W
$new_file = fopen( "newfile.txt", "w" ) or die( "Unable to open file!" );
$output = "Dit is de tekst voor onze nieuwe file";
fwrite( $new_file, $output );

fclose( $new_file );
 ?>
</body>
</html>
