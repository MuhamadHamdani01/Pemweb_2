<?php 
class NilaiMahasiswa {
    public $matakuliah;
    public $nilai;
    public $nim;
    
    public function __construct($matakuliah, $nilai, $nim) {
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }
    
    public function grade() {
        if ($this->nilai >= 85 && $this->nilai <= 100) {
            return "A";
        } elseif ($this->nilai >= 76 && $this->nilai < 86) {
            return "B";
        } elseif ($this->nilai >= 60 && $this->nilai < 76) {
            return "C";
        } elseif ($this->nilai >= 31 && $this->nilai < 60) {
            return "D";
        } elseif ($this->nilai >= 0 && $this->nilai < 31) {
            return "E";
        } else {
            return "I";
        }
    }
    
    public function hasil() {
        if ($this->grade() == "A" || $this->grade() == "B" || $this->grade() == "C") {
            return "Lulus";
        } else {
            return "Tidak Lulus";
        }
    }
}