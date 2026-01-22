<?php
    class Mobil {
        public $merk;

        public function __construct($merk) {
            $this->merk = $merk;
        }

        public function infoMobil() {
            return "Merk Mobil: " . $this->merk;
        }
    }

    $mobil1 = new Mobil("Toyota");
    $mobil2 = new Mobil("Honda");

    echo $mobil1->infoMobil() . "\n";
    echo $mobil2->infoMobil();
?>
