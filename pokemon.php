<?php

class Pokemon {
    public static $Counter = 0;
    public $Id; // een uniek nummer voor elk object, dus voor elke pokemon
    public $EnergyType;
    public $Name;
    public $Health;
    public $Attacks;
    public $Weakness;
    public $Resistance; 

    public function __construct($Name, $HealthPoints, $EnergyType) {
        self::$Counter = self::$Counter + 1;
        $this->Id = self::$Counter;
        $this->Name = $Name;
        $this->EnergyType = $EnergyType;
        $this->Health = $HealthPoints;
        $this->Attacks = [];
    }

    //functie om de damage te berekenen

    public function DoDamage($energyType, $damage) {
        $calculatedDamage = $dmg - $this->Defense;
        if( $calculatedDamage > 0) {
            $this->CurrentHealth = $this->CurrentHealth - $calculatedDamage;
        }
    }
}

?>