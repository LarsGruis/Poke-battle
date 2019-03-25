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
	private $oneliner;

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

	public function __toString() {
        return json_encode($this);
    }

    public function sayOneliner()
    {
        return $this->oneliner;
    }    
}