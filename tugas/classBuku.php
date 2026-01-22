<?php
    class Buku {
        public $judul;
        public $pengarang;

        public function __construct($judul, $pengarang) {
            $this->judul = $judul;
            $this->pengarang = $pengarang;
        }

        public function infoBuku() {
            return "Judul: " . $this->judul . ", Pengarang: " . $this->pengarang;
        }
    }

    $buku = new Buku("Belajar PHP", "John Doe");
    echo $buku->infoBuku();
?>
