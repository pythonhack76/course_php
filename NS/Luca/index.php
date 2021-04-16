<?php

class Test

{

    public function __construct()
    {

        echo '<h1> Class ' . __NAMESPACE__ . '_' . __CLASS__ . ' created';
    }
}

$test = new Test();

$luca = new Luca\Test();
