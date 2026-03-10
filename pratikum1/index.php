<?php

include "Mahasiswa.php";

$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData("A11.2024.15582", "Alif Zulfanur", "Teknik Informatika");

echo "Data Mahasiswa : ";
echo "<br>";

foreach ($mahasiswaTI as $key => $value) {
    echo ucfirst($key) . " : " . $value . "<br>";
}

echo "<br>";

$mahasiswaTI->setData("2304004", "Bening Putrika ", "Akutansi");
foreach ($mahasiswaTI as $key => $value) {
    echo ucfirst($key) . " : " . $value . "<br>";
}
