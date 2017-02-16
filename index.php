<?php


date_default_timezone_set("Europe/Amsterdam");


$uur = date("H");
$minuut = date("i");
$seconde = date("s");

if ($uur >= 0)
{

		$tijd = "nacht";
		if ($uur >= 6)

		{
			$tijd = "morgen";
			if ($uur >= 12)
			{
				$tijd = "middag";
				if ($uur >= 18)
				{
					$tijd = "avond";
					

				}

			}

		}	

}






?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css"></link>
	<title>Goedemorgen | Jordy Lock</title>
	<meta http-equiv="refresh" content="1" >
</head>
<body class="<?php echo $tijd;?>">

	<div class="base">
		<h1>Goeden <?php echo $tijd; ?>!</h1>
		<h1>het is nu  <?php echo "$uur:$minuut:$seconde"; ?></h1>
	</div>


</body>
</html>


