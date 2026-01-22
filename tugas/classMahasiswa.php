<?php
    class Mahasiswa {
        public $nama;

        public function tampilkanNama() {
            return $this->nama;
        }
    }

    $mahasiswa = new Mahasiswa();
    $mahasiswa->nama = 'Fardhan Maulana';
    echo $mahasiswa->tampilkanNama();
?>
