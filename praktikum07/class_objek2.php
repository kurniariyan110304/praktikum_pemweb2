<?php
class Kendaraan{
    public $nama, $warna, $merk;

    public function berjalan()
    {
        return "$this->nama bisa jalan";
    }
    public function tambahKecepatan()
    {
        return "$this->nama bisa menambah kecepatan";
    }

    public function getKendaraan()
    {
        echo  "Nama : $this->nama <br>
               Warna : $this->warna <br>
               Merk : $this->merk";
    }
}
$objekKendaraan = new Kendaraan;
$objekKendaraan->nama = "Hijet 1000";
$objekKendaraan->warna = "Merah";
$objekKendaraan->merk = "Daihatsu";
echo $objekKendaraan->berjalan();
echo "<br>";
echo $objekKendaraan->tambahKecepatan();
echo "<br>";
echo $objekKendaraan->getKendaraan();
