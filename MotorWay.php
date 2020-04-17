<?php

require_once 'HighWay.php';
require_once 'Car.php';
final class MotorWay extends HighWay
{
    /**
     * @param $param
     * @return mixed|void
     */
    protected $nbLane = 4;
    protected $maxSpeed = 130;

    /**
     * @inheritDoc
     */
    public function addVehicule($param)
    {
        if ($param instanceof Car){
            $this->currentVehicles[] = $param;
        }
    }
}