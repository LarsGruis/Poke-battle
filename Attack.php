<?php

class Attack extends Pokemon {
	private $AttackName;
	private $Damage;

	public function __construct($AttackName, $Damage)
	{
	    $this->AttackName = $AttackName;
	    $this->Damage = $Damage;
	}

	public function getAttack()
    {
        return $this->AttackName;
    }

    public function getDamage()
    {
        return $this->Damage;
    }
}