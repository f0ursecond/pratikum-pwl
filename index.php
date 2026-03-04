<?php
include "Mahasiswa.php";

$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData("A11.2024.15582", "Fulan", "Teknik Informatika");

print_r('Data Mahasiswa: <br>');

print_r($mahasiswaTI->showAllData());
print_r('<br>');
print_r('<br>');

$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData("A11.2024.1775", "Los Pollos Hermanos", "Teknik Industri");

print_r($mahasiswaTI->showAllData());
