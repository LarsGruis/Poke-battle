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

	public function __construct($pokemonName = null, $energyType = null, $hitPoints = null, $health = null, $attack = null, $weakness = null, $resistance = null, $oneliner = null)
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

    public function getPokemonName()
    {
        return $this->pokemonName;
    } 

    public function getEnergyType()
    {
        return $this->energyType;
    }

    public function getHitPoints()
    {
        return $this->hitPoints;
    } 

    public function getHealth()
    {
        return $this->health;
    }

    public function getAttack()
    {
        return $this->attack;
    }

    public function getWeakness()
    {
        return $this->weakness;
    }

    public function getResistance()
    {
        return $this->resistance;
    }               

    public function sayOneliner()
    {
        return $this->oneliner;
    }    
}