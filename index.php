<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Laptop {

	protected $ram;
	protected $hdd;
	protected $warna;
	protected $nama;
	
	public function __construct(
		$nama, $input_ram, $input_hdd, $input_warna)
	{
		$this->ram = $input_ram;
		$this->hdd = $input_hdd;
		$this->warna = $input_warna;
		$this->nama = $nama;
	}
	
	public function getRam()
	{
		return "RAM: ". $this->ram . "GB";
    }
    
    public function setRam($ram)
	{
		$this->ram = $ram;
	}
	
	public function getHdd()
	{
		return "HDD: ". $this->hdd . "GB";
	}
	
	public function getNamaLaptop()
	{
		return "Nama Laptop: ". $this->nama;
	}
	
	public function merk($name = 'world', $version = 0) 
	{
		return "Merk Laptop : " . $name . "<br> Versi Laptop : " . $version;
	}
	
	public function nyala()
	{
		return "Manyala!!!";
	}
}

// $asus = new Laptop('ASUS', 2, 500, 'hitam');
// $asus->getRam();
// echo "<br>";
// $asus->getHdd();
// echo "<br>";
// $asus->getNamaLaptop();

// echo "<br><br>";

// $acer = new Laptop('ACER', 4, 1000, 'putih');
// $acer->getRam();
// echo "<br>";
// $acer->getHdd();
// echo "<br>";
// $asus->getNamaLaptop();
// echo "<br>";
// echo $asus->ram;
// echo "<br>";
// $acer->setRam(100);
// $acer->getRam();