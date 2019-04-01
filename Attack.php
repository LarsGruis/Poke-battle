<?php

class Attack {
    public $Name;          
    public $AttackPoints;    

    public function __construct($name, $attack_points) {
        $this->Name = $name;
        $this->AttackPoints = $attack_points;
    }

    public function Execute($target) {
        if ($target == null) {
            echo 'Kan aanval niet uitvoeren; target is null';
        }

        if (gettype($target) !=  "Pokemon") {
            die('Kan aaval niet uitvoeren; target is not of type Pokemon (' . gettype($target) . ')');
        }

        $target->DoDamage($this->AttackPoints);
    }
}