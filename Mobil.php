<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

class Mobil  {

    const MAX_HARGA = 400000000;

    public static $harga;

    public static function beliMobil()
    {
        return "Beli Mobil Seharga: Rp. ". self::$harga;
    }

    public static function hargaMaksimalMobil()
    {
        return "Maksimal Harga Mobil: Rp. ". number_format(self::MAX_HARGA);
    }

}

class Toyota extends Mobil {

    const MAX_HARGA = 200000000;

    public static function cekMaksimalHargaMobil()
    {
        return "Maksimal Harga Mobil: ". number_format(parent::MAX_HARGA);
    }

    public static function cekMaksimalHargaToyota()
    {
        return "Maksimal Harga Toyota: ". number_format(self::MAX_HARGA);
    }

}

// Mobil::$harga = number_format(100000000);
// echo Mobil::$harga . "<br>";
// if (Mobil::$harga > Mobil::MAX_HARGA) {
//     echo "Harga tidak boleh melebihi batas maksimal."; 
// } else {
//     echo "Harga boleh-boleh saja.";
// }

// echo Mobil::beliMobil() . "<br>";
// echo Mobil::hargaMaksimalMobil();

Toyota::$harga = number_format(45000000);
echo Toyota::$harga . "<br>";
echo Toyota::cekMaksimalHargaMobil() . "<br>";
echo Toyota::cekMaksimalHargaToyota() . "<br>";