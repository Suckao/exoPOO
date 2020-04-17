<?php
require_once 'Bicycle.php';

final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;
    protected $maxSpeed = 10;

    /**
     * @inheritDoc
     */
    public function addVehicule($param)
    {
        if ($param instanceof Bicycle){
            $this->currentVehicles[] = $param;
        }
    }
}