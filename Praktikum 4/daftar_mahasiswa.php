<?php
require_once 'class_mahasiswa.php';

$mahasiswa_list = [
     new mahasiswa("021101", "Asgara", "Teknik Informatika", "2020", 3.5),
     new mahasiswa("021102", "Trijaya", "Sistem Informasi", "2020", 3.7),
     new mahasiswa("021103", "Rahmad", "Bisnis Digital", "2020", 3.9),
     new mahasiswa("021104", "Fikri", "Sastra Indonesia", "2020", 3.8),
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Daftar Mahasiswa</title>
</head>
<body>
   
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">Prodi</th>
      <th scope="col">Angkatan</th>
      <th scope="col">IPK</th>
      <th scope="col">Predikat</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($mahasiswa_list as $mhs) {
     echo "<tr>
     <td> {$no} </td>
     <td> {$mhs -> nim} </td>
     <td> {$mhs -> nama} </td>
     <td> {$mhs -> prodi} </td>
     <td> {$mhs -> thn_angkatan} </td>
     <td> {$mhs -> ipk} </td> 
    <td span class = 'badge bg-success'> {$mhs -> predikat_ipk()} </td></tr>";
    $no++;
   
    }
    ?>
  </tbody>
</table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>