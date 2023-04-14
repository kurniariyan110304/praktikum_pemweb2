<?php
class Mamalia{
    public $nama;
    public $warna;
    public $habitat;

    function menyusui()
    {
        return "$this->nama adalah hewan menyusui";
    }

    function melahirkan()
    {
        return "$this->nama adalah hewan melahirkan";
    } 
}
$objek = new Mamalia;
$objek->nama = "Kucing";
$objek->warna = "Coklat";
$objek->habitat = "Sekitar Manusia";
echo $objek->menyusui();
echo "<br>";
echo $objek->melahirkan();