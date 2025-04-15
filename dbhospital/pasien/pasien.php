<?php
require_once "../dbkoneksi.php";

$list_pasien = $dbh->query("SELECT * FROM pasien");
?>


<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="../assets/style1.css">
 <a href="form_tambah_pasien.php" class="btn">+ Tambah Pasien</a>
    <title >Data Pasien</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #aaa;
            padding: 8px 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #fafafa;
        }

        tr:hover {
            background-color: #e6f7ff;
        }
        .btn-edit {
            color: white;
            background-color: #e74c3c;
            padding: 4px 10px;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn-edit:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

<h2>Data Pasien</h2>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Pasien</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_pasien as $idx => $pasien) { ?>
        <tr>
            <td><?= $idx + 1 ?></td>
            <td><?= $pasien['kode'] ?></td>
            <td><?= $pasien['nama'] ?></td>
            <td><?= $pasien['gender'] ?></td>
            <td><?= $pasien['email'] ?? '-' ?></td>
            <td><?= $pasien['alamat'] ?></td>
            <td style="width: 100px;">
                <?php if (isset($pasien['id'])): ?>
                    <a href="form_tambah_pasien.php?edit=<?= $pasien['id'] ?>" class="btn-edit"><i class="fa-solid fa-trash"></i>edit</a>
                <?php else: ?>
                    <em>ID tidak ditemukan</em>
                <?php endif; ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>