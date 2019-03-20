<?php

class Pokemon
{
	private $pokemonName;
	private $energyType;
	private $hitPoints;
	private $health;
	private $attack;
	private $weakness;
	private $resistance;

	public function __construct($pokemonName, $energyType, $hitPoints, $health, $attack, $weakness, $resistance)
	{
	    $this->pokemonName = $pokemonName;
	    $this->energyType = $energyType;
	    $this->hitPoints = $hitPoints;
	    $this->health = $health;
	    $this->attack = $attack;
	    $this->weakness = $weakness;
	    $this->resistance = $resistance;
	}

	public function __toString() {
        return json_encode($this);
    }

    
}