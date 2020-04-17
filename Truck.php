<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
private $stock = 0;
private $energy;
    const upStock = 50;
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    const ALLOWED_STOCK = 100;

 public function changeWheel()
 {
     // TODO: Implement changeWheel() method.
 }

    public function getStock()
 {
     {
         while ($this->stock <= self::ALLOWED_STOCK){
             return $this->stock;
         }
     }

}
public function setStock($stock){
     if ($stock <= self::ALLOWED_STOCK && $stock > 0)  {
         $stock = $stock;
         $this->stock = $stock;
         return $this;
     }
}

public function getEnergy(){
   return $this -> energy;
}
    public function setEnergy(string $energy)
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

 public function __construct(string $color, int $nbSeats, string $energy, int $stock)
{
    parent::__construct($color, $nbSeats);
    $this -> setStock($stock);
    $this->setEnergy($energy);
}

public function truckFUll(){
     if($this->stock >= 100){
         echo "The truck is full";
     }else{
         echo "The truck is in filling";
     }
}
    public function charge()
    {
        if ($this->getStock() < self::ALLOWED_STOCK) {
            $this->setStock($this->getStock() + self::upStock);
        }
    }

}
