<?php

include "Mahasiswa.php";
include "MataKuliah.php";


$mahasiswa_1 =  new Mahasiswa();
$matkul_1 = new Matakuliah();
$matkul_2 = new Matakuliah();

$matkul_1->setData('A11.12345', 'Pemrograman Berbasis Web');
$matkul_2->setData('A11.22132', 'Pemrograman Web Lanjut');

$mahasiswa_1->setData('A11.2024.15582', 'Alif Zulfanur', [$matkul_1, $matkul_2], "2004-10-30");

echo "<pre>";
echo "Umur dihitung dengan method/function : <br>";
print_r($mahasiswa_1->getData()[4]);
echo "<br></br>";
echo "Nilai umur diberi secara langsung : <br>";
$mahasiswa_1->umur = 100;
print($mahasiswa_1->umur);

// print_r($mahasiswa_1->getData());

"</pre>";
