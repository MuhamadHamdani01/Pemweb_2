<?php
require_once "../dbkoneksi.php";

// Ambil semua data paramedik
$list_paramedik = $dbh->query("SELECT * FROM paramedik");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Paramedik</title>
    <link rel="stylesheet" href="../assets/style1.css"> 
    <a href="form_tambah_paramedik.php" class="btn">+ Tambah Paramedik</a>
</head>
<body>

<h2>Daftar Paramedik</h2>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Kategori</th>
            <th>Telpon</th>
            <th>Alamat</th>
            <th>Unit Kerja ID</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_paramedik as $idx => $p) { ?>
        <tr>
            <td><?= $idx + 1 ?></td>
            <td><?= $p['nama'] ?></td>
            <td><?= $p['gender'] ?></td>
            <td><?= $p['tmp_lahir'] ?></td>
            <td><?= $p['tgl_lahir'] ?></td>
            <td><?= $p['kategori'] ?></td>
            <td><?= $p['telpon'] ?></td>
            <td><?= $p['alamat'] ?></td>
            <td><?= $p['unit_kerja_id'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>