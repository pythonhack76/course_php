<?php
include_once 'Luca/Test.php';
include_once 'Silver/Test.php';
class Test

{

    public function __construct()
    {

        echo '<h1> Class ' . __NAMESPACE__ . '_' . __CLASS__ . ' created';
    }
}

$test = new Test();

$luca = new Luca\Test();

$silver = new Silver\Test();
