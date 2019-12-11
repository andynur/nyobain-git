<?php 

require "index.php";

class Asus extends Laptop {
    const GEAR = 10;

    public static $harga;

    public function getRam()
	{
		return "INI RAM NYA: ". $this->ram . "GB";
    }

    public function getRamAndHdd()
	{
        return "INI RAM NYA: ". $this->ram . "GB <br/> INI HDD NYA: ". $this->hdd . "GB";        
    }

    public static function fiturRog()
    {
        return "Fitur nya banyak!!!";
    }
}

$asus_rog = new Asus('ASUS ROG', 4, 500, 'bening');
echo $asus_rog->nyala();
echo "<br>";
echo $asus_rog->getRamAndHdd();
echo "<br>";
Asus::fiturRog();
Asus::$harga = 900000000;
echo "<br>";
echo Asus::$harga;
echo "<br>";
echo Asus::GEAR;