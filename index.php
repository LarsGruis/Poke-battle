<!DOCTYPE html>
<html>
<head>
  <title>Poké battle</title>
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
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

<?php

require 'Pokemon.php';
require 'Attack.php';
require 'Weakness.php';
require 'Resistance.php';

// hier wordt de pokemon Pikachu aangemaakt

printPokemon(Pokemon::$Counter);
$pikachu = new Pokemon("Pikachu", 60, "Lightning");
$pikachu->Weakness = new Weakness("Fire", 1.5);
$pikachu->Resistance = new Resistance("Fighting", 20);
$pikachu->Attacks[] = new Attack("Electric Ring", 50);
$pikachu->Attacks[] = new Attack("Pika Punch", 20);

printPokemon($pikachu);

// hier wordt de pokemon Charmeleon aangemaakt

$charmeleon = new Pokemon("Charmeleon", 60, "Fire");
$charmeleon->Weakness = new Weakness("Water", 2);
$charmeleon->Resistance = new Resistance("Lightning", 10);
$charmeleon->Attacks[] = new Attack("Head Butt", 10);
$charmeleon->Attacks[] = new Attack("Flare", 30);

printPokemon($charmeleon);

$bulbausar = new Pokemon("Bulbausar", 50, "Grass");
$bulbausar->Weakness = new Weakness("Fire", 2);
$bulbausar->Resistance = new Resistance("Lightning", 10);
$bulbausar->Attacks[] = new Attack("Tackle", 15);
$bulbausar->Attacks[] = new Attack("Growl", 20);

printPokemon($bulbausar);

foreach($pikachu->Attacks as $attack) {
    printPokemon("Execute attack " . $attack->Name . ' on ' . $charmeleon->Name);
    $attack->Execute($charmeleon);
}

function printPokemon($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

?>