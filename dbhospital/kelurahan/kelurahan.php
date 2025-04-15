<?php
require_once "../dbkoneksi.php";

// Hapus jika ada parameter ID di URL
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $stmt = $dbh->prepare("DELETE FROM kelurahan WHERE id = ?");
    $stmt->execute([$id]);

    // Redirect agar tidak mengulang proses hapus saat refresh
    header("Location: kelurahan.php");
    exit;
}

// Ambil semua data kelurahan
$list_kelurahan = $dbh->query("SELECT * FROM kelurahan")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kelurahan</title>
    <link rel="stylesheet" href="../assets/style1.css">
    <script src="https://kit.fontawesome.com/de0232a17f.js" crossorigin="anonymous"></script>
    <style>
        .btn-hapus {
            color: white;
            background-color: #e74c3c;
            padding: 4px 10px;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn-hapus:hover {
            background-color: #c0392b;
        }

        .btn {
            display: inline-block;
            margin-bottom: 10px;
            padding: 6px 12px;
            background-color: #3498db;
            color: white;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Kelurahan</h2>
        <a href="form_tambah_kelurahan.php" class="btn">+ Tambah Kelurahan</a>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kelurahan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list_kelurahan as $idx => $kel): ?>
                    <tr>
                        <td><?= $idx + 1 ?></td>
                        <td><?= htmlspecialchars($kel['nama']) ?></td>
                        <td style="width: 100px;">
                            <?php if (isset($kel['id'])): ?>
                                <a href="?hapus=<?= $kel['id'] ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus kelurahan ini?')"><i class="fa-solid fa-trash"></i> Hapus</a>
                            <?php else: ?>
                                <em>ID tidak ditemukan</em>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
