<?php

require 'pokemon.php';
require 'Attack.php';
require 'Charmeleon.php';
require 'Health.php';
require 'HitPoints.php';
require 'Resistance.php';
require 'Weakness.php';
require 'Pikachu.php';
require 'EnergyType.php';

print_r('<pre>'. $pikachu . '</pre>');

var_dump($pikachu);

$pikachu->getPokemonName();
$pikachu->sayOneliner();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Poké battle</title>
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<? echo $pikachu; ?>
	<h1 class="pokemons_title">Pokebattle</h1>
	<div class="container">
  		<div class="row">
    		<div class="col">
      			<img src="images/pikachu.png" class="pokemons_img"></img>
      			<h1 class="pokemons_title">Pikachu</h1>
    	</div>
    	<img src="images/vs-sign.png" class="vs-sign"></img>
    		<div class="col">
      			<img src="images/charmeleon.png" class="pokemons_img"></img>
      			<h1 class="pokemons_title">Charmeleon</h1>
    		</div>
  	</div>
</body>
</html>