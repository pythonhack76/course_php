<?php

/**
 * public
 * protected
 * private
 * classi
 * @author:    Luca Rulvoni 
 */


class Auto
{

    protected $color = '';
    protected $upholstery;
    protected $brand = '';

    public function __construct($extColor = null, $intColor = null, $brand = null)
    {
        $this->color = $extColor;
        $this->upholstery = $intColor;
        $this->brand = $brand;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor(string $color)
    {
        if (strlen($color) < 3) {
            throw new Exception('Invalid argument');
        }
        $this->color = $color;
    }

    public function getUpholstery()
    {
        return $this->upholstery;
    }
    public function setUpholstery(string $uph)
    {

        $this->upholstery = $uph;
    }

    public function getBrand()
    {
        return $this->brand;
    }
    public function setBrand(string $brand)
    {

        $this->brand = $brand;
    }
}

class Truck extends Auto
{ //
    protected $weight;

    public function __construct($extColor = null, $intColor = null, $brand = null, $weight = null)
    { //            
        parent::__construct($extColor, $intColor, $brand);
        $this->weight = $weight;
    }
}


$ordTruck = new Truck('yellow', 'sweet Pastel', 'Fiat');
//$ordTruck->setColor("green");
echo $ordTruck->getColor();
echo $ordTruck->getBrand();
