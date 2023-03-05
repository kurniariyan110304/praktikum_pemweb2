<?php
$arrayBuah = ["Jeruk","Mangga","Pisang","Apel"];

// mengurutkan nilai suatu array
sort($arrayBuah);

//menghapus nilai yang paling akhir
array_pop($arrayBuah);

//menghapus spesifik nilai tertentu
unset($arrayBuah[0]);

//menambahkan nilai
array_push($arrayBuah, "Durian");

//menghapus nilai array yang paling awal
array_shift($arrayBuah);

//menambahkan nilai array di paling depan
array_unshift($arrayBuah, "Semangka");

//mengubah spesifik nilai tertentu
$arrayBuah[0] = "Manggis";
foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}