<?php

// $pikachu =  new Pokemon('Piet', 'Lightning', '60', 'Electric punch = 50', 'Pika Punch = 20', 'Fire', 'Fighting', 'test');

class Pikachu extends Pokemon {
	private $pokemonName = 'Kees';
	private $energyType = 'Lightning';
	private $hitPoints = 60;
	private $electricRing = 50;
	private $pikaPunch = 50;
	private $fire = 1.5;
	private $fighting = 20;

	public function __construct($pokemonName, $energyType, $hitPoints, $health, $attack, $weakness, $resistance, $oneliner)
	{
	    $this->pokemonName = $pokemonName;
	    $this->energyType = $energyType;
	    $this->hitPoints = $hitPoints;
	    $this->health = $health;
	    $this->attack = $attack;
	    $this->weakness = $weakness;
	    $this->resistance = $resistance;
	    $this->oneliner = $oneliner;
	}
}