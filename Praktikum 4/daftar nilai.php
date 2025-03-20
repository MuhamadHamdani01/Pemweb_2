<?php
require_once 'class_nilai mahasiswa.php';

$mhs1 =new NilaiMahasiswa( 1,'A', 85);
$mhs1->nama = "Muhamad Hamdani";
$mhs1->matakuliah = "Dasar Dasar Pemograman";
$mhs1->nilai_uts = 80;
$mhs1->nilai_uas = 85;
$mhs1->nilai_tugas = 90;


$mhs2 = new NilaiMahasiswa( 2,'B', 90);
$mhs2->nama = "dana";
$mhs2->matakuliah = "Tugas akhir";
$mhs2->nilai_uts = 80;
$mhs2->nilai_uas = 60;
$mhs2->nilai_tugas = 90;


$mhs3 = new NilaiMahasiswa( 3,'C', 80);
$mhs3->nama = "bahlul";
$mhs3->matakuliah = "Dasar Dasar Pemograman";
$mhs3->nilai_uts = 60;
$mhs3->nilai_uas = 55;
$mhs3->nilai_tugas = 60;


$ar_mahasiswa = [$mhs1, $mhs2, $mhs3];

?>
<h2 style="text-align: center;"> Daftar Nilai Mahasiswa</h2>
<table border="1" cellspacing="2" cellpading="10" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>Nilai Tugas</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>kelulusan</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if (isset($_POST['submit'])) {
            $mhs4 = new NilaiMahasiswa( 4,'D', 70);
            $mhs4->nama = $_POST['nama'];
            $mhs4->matakuliah = $_POST['matkul'];
            $mhs4->nilai_uts = $_POST['nilai_uts'];
            $mhs4->nilai_uas = $_POST['nilai_uas'];
            $mhs4->nilai_tugas = $_POST['nilai_tugas'];
            $ar_mahasiswa[] = $mhs4;
            }
            ?>
            <?php $no=1; foreach ($ar_mahasiswa as $obj) {?>
            <tr>
                <td><?=$no?></td>
                <td><?=$obj->nama?></td>
                <td><?=$obj->matakuliah?></td>
                <td><?=$obj->nilai_tugas?></td>
                <td><?=$obj->nilai_uts?></td>
                <td><?=$obj->nilai_uas?></td>
                <td><?=$obj->getNilaiAkhir()?></td>
                <td><?=$obj->kelulusan();?></td>
            </tr>
            <?php 
            $no++; 
            } ?>
    </tbody>
</table>