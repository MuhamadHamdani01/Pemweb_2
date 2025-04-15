<?php
require_once "../dbkoneksi.php";

$list_unit = $dbh->query("SELECT * FROM unit_kerja");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Unit Kerja</title>
    <link rel="stylesheet" href="../assets/style1.css">
    <a href="form_tambah_unitkerja.php" class="btn">+ Tambah Unit Kerja</a>
</head>
<body>
    <h2>Daftar Unit Kerja</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Unit Kerja</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list_unit as $idx => $unit): ?>
            <tr>
                <td><?= $idx + 1 ?></td>
                <td><?= $unit['nama'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>