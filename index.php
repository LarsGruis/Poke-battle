<?php

require 'pokemon.php';

$pikachu =  new Pokemon('Piet', 'Lightning', '60', 'Electric punch = 50', 'Pika Punch = 20', 'Fire', 'Fighting', 'test');
$charmeleon =  new Pokemon('Kees', 'Fire', '60', 'Head Butt = 10', 'Flare = 30', 'Water', 'Lightning', 'test');

print_r('<pre>'. $pikachu->sayOneliner() . '</pre>');

$pikachu->sayOneliner();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Poké battle</title>
</head>
<body>
	<? echo $pikachu; ?>
</body>
</html>