<?php

class Robot
{ //
    public $modello;
    public $marca;
    public $tipologia; //


    public function __construct($modello, $marca, $tipologia)
    { //
        $this->modello = $modello; 
        $this->marca = $marca;
        $this->tipologia = $tipologia; 

    }
        public funtion getModello() {
        
        return $this->modello;     
    }

class vacuum extends Robot
{  //

    protected $speed = 0;
    public const SPEEDUNIT = 'm/s';
}


$robot = new vacuum();
echo $robot::SPEEDUNIT;
