<?php
    class PersegiPanjang {
        public $panjang;
        public $lebar;

        public function hitungLuas() {
            return $this->panjang * $this->lebar;
        }
    }

    $persegiPanjang = new PersegiPanjang();
    $persegiPanjang->panjang = 10;
    $persegiPanjang->lebar = 5;
    echo "Luas Persegi Panjang: " . $persegiPanjang->hitungLuas();
?>
