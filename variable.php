<?php

$nama_depan="Muhamad";
$nama_belakang="Hamdani";
$nama_paling_belakang="Dani";
$umur= 19;
$tb=165.5;

echo $nama_depan."".$nama_belakang;
echo "<br>Nama saya adalah $nama_depan
dan saya berumur $umur";

echo "<br/><br />";

//Variable system
echo 'Dokumen Root'.$_SERVER
['DOCUMENT_ROOT'];


//Variable Constanta
define('PHI', 3.14);


$r = 8;
$luas = PHI * $r * $r;


echo "Lingkaran dengan jari-jari {$r}cm memiliki luas {$luas} cm2"; 
