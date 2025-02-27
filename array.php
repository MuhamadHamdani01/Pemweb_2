<?php

//Mendefinisikan sebuah array
$list_buah=["pepaya", "Mangga", "Pisang","Jambu"];
 
/** 
*Nilai di dalam array masing-masing memiliki sebuah kunci yang disebut dengan index
*
* index dimulai dari 0
*/

echo $list_buah[2];
echo " <br>List berisi ". count ($list_buah) . " buah";

//Mencetak seluruh nilai di dalam array
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// Menambahkan nilai array
$list_buah[] = "Durian";
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
    }
    echo "</ol>";

    //Menghapus nilai array berdarsakan index
    unset($list_buah[1]);
    echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
    }
    echo "</ol>";

    //Mengganti nilai array berdasarkan index
    $list_buah[0] = "Apel";
    echo "<ol>";
    foreach($list_buah as $buah) {
        echo "<li>$buah</li>";
        }
        echo "</ol>";

    //Mencetak seluruh nilai array beserta indexnya
    echo "<ol>";
    foreach ($list_buah as $index => $buah) {
        echo "<li>Buah dengan index $index adalah $buah</
        li>";
    }
        echo "</ul>";
    