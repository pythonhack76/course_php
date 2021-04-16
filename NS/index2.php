<?php
function autoloadClass($className)
{ //

    echo "<h1>$className</h1>";
    $link = str_replace('\\', '/', $className) . '.php';
    echo $link;
    if (file_exists($link)) { //
        require_once $link; //
    }
}
spl_autoload_register('autoloadClass');

$luca = new Luca\Test();

$silver = new Silver\Test();
