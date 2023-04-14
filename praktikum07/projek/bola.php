<?php
class Bola {
    private $jari_jari;
    private $phi = 3.14;
  
    public function __construct($jari_jari) {
      $this->jari_jari = $jari_jari;
    }
  
    public function hitung_volume() {
      return (4/3) * $this->phi * pow($this->jari_jari, 3);
    }
  
    public function hitung_luas_permukaan() {
      return 4 * $this->phi * pow($this->jari_jari, 2);
    }
  }
  // Membuat objek Bola
$bola = new Bola(7);

// Menghitung volume Bola
$volume_bola = $bola->hitung_volume();
echo "Volume Bola: ".$volume_bola."<br>";

// Menghitung luas permukaan Bola
$luas_bola = $bola->hitung_luas_permukaan();
echo "Luas Permukaan Bola: ".$luas_bola."<br>";
