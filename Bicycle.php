<?php
require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{


    public function changeWheel()
    {
        // TODO: Implement changeWheel() method.
    }

    public function switchOn()
    {
        if ($this->currentSpeed> 10){
            return true;
        }
    }

    public function switchOff()
    {
        return false;
    }
}