<?php

/**
 * public
 * protected
 * private
 * classi
 * @author:    Luca Rulvoni 
 */

/*----------------------------------------------------------------
        creiamo la classe Auto la principale del programma OOP
------------------------------------------------------------------*/

class Auto
{

    protected $color = '';
    protected $upholstery;
    protected $brand = '';

    /*----------------------------------------------------------------
        definiamo il constructor principale
------------------------------------------------------------------*/

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

/*----------------------------------------------------------------
        creiamo una nuova classe Truck che eredita da Auto 
------------------------------------------------------------------*/

class Truck extends Auto
{ //
    protected $weight;

    public function __construct($extColor = null, $intColor = null, $brand = null, $weight = null)
    { //            
        parent::__construct($extColor, $intColor, $brand);
        $this->weight = $weight;
    }
    //modifichiamo le impostazioni della funzione 
    public function getColor()
    {
        return 'Il colore del camion è: ' . strtoupper(parent::getColor());
    }

    /*--------------------------------------------------------------------
    aggiungo funzioni per metodi riservati alla nuova classe Truck  
---------------------------------------------------------------------*/
    public function getWeight()
    {

        return $this->weight;
    }

    public function setWeight($w) //possiamo anche utilizzare il nome di variabile $w ad esempio 
    {
        return $this->weight = "<b>" . ' ' . $w . "</b>";
    }
}

/*----------------------------------------------------------------
        stampiamo le classi che abbiamo sviluppato
------------------------------------------------------------------*/

$fordTruck = new Truck('brown', 'sweet Pastel', 'Fiat', 200);
//$ordTruck->setColor("green");
$fordTruck->setColor('Blue');
echo $fordTruck->getColor();
echo $fordTruck->getBrand();
$fordTruck->setWeight(400);
echo $fordTruck->getWeight();
