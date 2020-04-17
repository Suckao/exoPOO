<?php

require_once 'Bicycle.php';
final class ResidentialWay extends HighWay
{
    protected $nbLane = 2;
    protected $maxSpeed = 50;

    /**
     * @inheritDoc
     */
    public function addVehicule($param)
    {
        if ($param instanceof Vehicle){
            $this->currentVehicles[] = $param;
        }
    }
}