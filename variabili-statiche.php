<?php


// function incrementCounter()
// {

//     static $counter = 0;
//     echo ++$counter . PHP_EOL;
// }

// incrementCounter();
// incrementCounter();
// incrementCounter();
// incrementCounter();
// incrementCounter();

interface Funzioni
{

    public function Attivo();
    public function Remoto(); //
    public function Riposo();  //
    public function Ricarica(); //
    public function Seduto(); //
    public function InPiedi();
}




class Prodotto
{ //


    public $prodotto;

    public function __construct($prodotto)
    {

        $this->prodotto = $prodotto;
    }

    public function getProdotto()
    {
        return $this->prodotto;
    }

    public function setProdotto(string $prodotto)
    {
        return $this->prodotto = $prodotto;
    }
}


class Computer extends Prodotto
{ //

    public $cabinet;
    public $motherboard;
    public $keyboard;
    public $joystick;

    public function __construct($cabinet = null, $motherboard = null, $keyboard = null, $joystick = null, $prodotto)
    {
        parent::__construct($prodotto);
        $this->cabinet = $cabinet;
        $this->motherboard = $motherboard;
        $this->keyboard = $keyboard;
        $this->joystick = $joystick;
    }
}

class Robot implements Funzioni
{

    public function Attivo();
    public function Remoto(); //
    public function Riposo();  //
    public function Ricarica(); //
    public function Seduto(); //
    public function InPiedi();
}

$programma = new Prodotto('microsoft');
echo $programma->getProdotto('microsoft windows');
