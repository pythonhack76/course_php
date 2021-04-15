<?php

class Dipendente
{

    public $nome = '';
    public $anni_servizio = 0;
    public $stipendio = 1000;


    public function __construct($nome, $anni_servizio, $stipendio)
    {


        $this->nome = $nome;
        $this->anni_servizio = $anni_servizio;
        $this->stipendio = $stipendio;
    }
    public function getNome()
    {

        return $this->nome;
    }

    public function setNome(string $nome)
    {

        return $this->nome = $nome;
    }
}

$dipendente = new Dipendente('luca', 10, 1000);
$dipendente->setNome('Pippo');
echo $dipendente->getNome();
