<?php
/**
 * Class Lingkaran
 * Berfungsi untuk objek lingkaran dengan properti jari-jari
 * dan metode untuk menghitung luas dan keliling lingkaran
 */
class Lingkaran{
   public $jari;
   public const PHI = 3.14;

   public function __construct($r){
      $this->jari = $r;
   }
   public function getLuas(){
      $luas = self::PHI * $this->jari * $this->jari;
      return $luas;
   }
   public function getKeliling(){
      $keliling = 2.0 * self::PHI * $this->jari;
      return $keliling;
   }

   public function cetak(){
      echo " Lingkaran dengan jari2 " . $this->jari . "<br>";
      echo " <br>Luas = ". $this->getLuas();
      echo " <br> Keliling = " . $this->getKeliling() . "<br>";
   }
}