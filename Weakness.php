<?php
class Weakness
{
    public $EnergyType;           // water, air, fire
    public $Multiplier;                  // 1,5 or 2 or 3
    public function __construct($EnergyType, $Multiplier)
    {
        $this->EnergyType = $EnergyType;
        $this->Multiplier = $Multiplier;
    }
}