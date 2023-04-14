<?php
class Balok {
    private $panjang;
    private $lebar;
    private $tinggi;
  
    public function __construct($panjang, $lebar, $tinggi) {
      $this->panjang = $panjang;
      $this->lebar = $lebar;
      $this->tinggi = $tinggi;
    }
  
    public function hitung_volume() {
      return $this->panjang * $this->lebar * $this->tinggi;
    }
  
    public function hitung_luas_permukaan() {
      return 2 * ($this->panjang * $this->lebar + $this->panjang * $this->tinggi + $this->lebar * $this->tinggi);
    }
  }
  // Membuat objek Balok
$balok = new Balok(3, 4, 5);

// Menghitung volume Balok
$volume_balok = $balok->hitung_volume();
echo "Volume Balok: ".$volume_balok."<br>";

// Menghitung luas permukaan Balok
$luas_balok = $balok->hitung_luas_permukaan();
echo "Luas Permukaan Balok: ".$luas_balok."<br>";