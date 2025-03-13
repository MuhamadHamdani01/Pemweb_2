<?php
require_once'../pertemuan 3/fungsiku.php';
    if(isset($_POST['submit'])) {
        
        
        $nama = $_POST['nama'];
        $matkul = $_POST['matkul'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_tugas= $_POST['nilai_tugas'];
        
        $_nilai_akhir = hitung_nilai($nilai_uts, $nilai_uas, $nilai_tugas);
        $_ket_lulus= kelulusan($_nilai_akhir);
        $_Hasil_Kelulusan = kelulusan($_nilai_akhir);
        echo "<p>Nama: $nama</p>";
        echo "<p>Mata Kuliah : $matkul</p>";
        echo "<p>Nilai UTS : $nilai_uts</p>";
        echo "<p>Nilai UAS : $nilai_uas</p>";
        echo "<p>Nilai Tugas : $nilai_tugas</p>";


        echo "<p>Nilai Akhir : $_nilai_akhir</p>";
        echo "<p>Keterangan : $_ket_lulus</p>"; 
        echo "<p>Hasil Kelulusan : $_Hasil_Kelulusan</p>";

        //Status Kelulusan
        $nilai_total=($nilai_uts *0.3) + ($nilai_uas *0.35) + ($nilai_tugas *0.35);

        //Check nilai total
        if ($nilai_total > 55 ){
            echo "<h1> $nama dinyatakan lulus.</h1>";
        } else{
            echo "<p>Nilai tidak memenuhi.</p>";
        }
        if ($nilai_total >= 85 && $nilai_total <= 100 ){
            $Grade = "A";
        } elseif ($nilai_total >= 70 && $nilai_total < 85) {
            $Grade = "B";
        } elseif ($nilai_total >= 56 && $nilai_total < 70) {
            $Grade = "C";
        } elseif ($nilai_total >= 36 && $nilai_total < 56) {
            $Grade = "D";
        } elseif ($nilai_total >= 0 && $nilai_total < 36) {
            $Grade = "E";
        } else {
            $Grade = "I";
        }
        switch ($Grade) {
            case "A":
                $Predikat = "Sangat Memuaskan";
                break;
            case "B":
                $Predikat = "Memuaskan";
                break;
            case "C":
                $Predikat = "Cukup";
                break;
            case "D":
                $Predikat = "Kurang";
                break;
            case "E": 
                $Predikat = "Sangat Kurang";
                break;
            case "I":
                $Predikat = "Tidak Ada";
                break;
        }
        echo "<p>Grade : $Grade</p>";
        echo "<p>Predikat : $Predikat</p>";
    }
?>