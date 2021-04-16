<?php

/**
 * 
 * @author: Luca Rulvoni 
 * 
 * 
 **/




abstract class Car
{
    protected $speed = 0;

    // non esisterà negli oggetti questa variabile statica risukterà non definita
    public static $classVersion = '4';

    public static $authorProgram = 'Luca Rulvoni';
    public static $annoSviluppo = '2021';

    abstract protected function speedUp(int $v);
    //se un metodo non si vuole che sia sovrascritto override 
    public final function getSpeed()
    {
        return $this->speed;
    }

    public static function getVersion()
    {
        return self::$classVersion;
    }

    public static function getAuthorProgram()
    {

        return self::$authorProgram;
    }
}

class myCar extends Car
{
    protected $speed = 0;
    public function speedUp(int $v)
    {

        $this->speed += $v;
    }

    public function getParentV()
    {
        return parent::$classVersion;
    }
}

$car = new myCar;
$car->speedUp(5);
var_dump($car);
//var_dump(Car::$classVersion);
var_dump($car->getParentV());
var_dump(Car::getVersion());
echo $car->getauthorProgram();
