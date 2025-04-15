<?php
require_once "../dbkoneksi.php";

$list_periksa = $dbh->query("SELECT * FROM periksa");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pemeriksaan Pasien</title>
    <link rel="stylesheet" href="../assets/style1.css">
    <a href="form_tambah_periksa.php" class="btn">+ Tambah Pemeriksaan</a>
</head>
<body>
    <h2>Data Pemeriksaan Pasien</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Berat (kg)</th>
                <th>Tinggi (cm)</th>
                <th>Tensi</th>
                <th>Keterangan</th>
                <th>ID Pasien</th>
                <th>ID Dokter</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list_periksa as $idx => $px) { ?>
            <tr>
                <td><?= $idx + 1 ?></td>
                <td><?= $px['tanggal'] ?></td>
                <td><?= $px['berat'] ?></td>
                <td><?= $px['tinggi'] ?></td>
                <td><?= $px['tensi'] ?></td>
                <td><?= $px['keterangan'] ?></td>
                <td><?= $px['pasien_id'] ?></td>
                <td><?= $px['dokter_id'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>