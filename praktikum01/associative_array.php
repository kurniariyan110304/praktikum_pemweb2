<?php
$profileArray = [
    "nama" => "Riyan", 
    "kelas" => "TI11"
];

echo $profileArray["nama"] . "<br>";
echo $profileArray["kelas"];

echo "<br>";

$profileMultiArray = [
    [
        "nama" => "Riyan",
        "semester" => 2
    ], [
        "nama" => "Fauzi",
        "semester" => 4
    ], [
        "nama" => "Paul Scholes",
        "semester" => 6
    ]
];

foreach($profileMultiArray as $profile){
    echo $profile['nama'] . "<br>";
    echo $profile['semester'] . "<br>";
}