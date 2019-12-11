<?php

require "index.php";

class Acer extends Laptop {

    public function specialsAcer() 
    {
        return "Ini fungsi khusus di Acer";
    }

    public function nyala() 
    {
        return "Acer Manyala Banar!!!";
    }

}

$acer_predator = new Acer("Acer Predator Gaming", 8, 1000, 'black');
echo $acer_predator->nyala() . "<br>";
echo $acer_predator->specialsAcer();

$acer_x71 = new Acer("Acer x71", 4, 500, 'white');
echo $acer_x71->nyala() . "<br>";
echo $acer_x71->specialsAcer();