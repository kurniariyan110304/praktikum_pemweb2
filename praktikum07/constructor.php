<?php
class Buah
{
    public $nama, $warna, $rasa;

    public function __construct($n, $w, $r)
    {
        $this->nama = $n;
        $this->warna = $w;  
        $this->rasa = $r;
    }

    function tumbuh()
    {
        return "$this->nama bisa tumbuh besar";
    }
}
$objekBuah = new Buah("Jeruk", "Oren", "Manis");
echo $objekBuah->tumbuh();
