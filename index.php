<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css"></link>
	<title>Goedemorgen</title>
	<meta http-equiv="refresh" content="1" >
</head>
<body>

<?php


date_default_timezone_set("Europe/Amsterdam");


if (date("H")<12) {
	echo "<h1>Goede Morgen!";
}
else if (date("H")>=12){
	echo "<h1>Goede Middag!";


}

echo   "Het is nu </h1>". date("<h1>H:i:s</h1>");

?>
</body>
</html>