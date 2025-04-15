<?php
require_once "../dbkoneksi.php";

// Ambil data kelurahan untuk dropdown
$list_kelurahan = $dbh->query("SELECT * FROM kelurahan");

// Handle POST
if (isset ($_POST['simpan'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kelurahan_id = $_POST['kelurahan_id'];

    $sql = "INSERT INTO pasien (kode, nama, gender, tmp_lahir, tgl_lahir, email, alamat, kelurahan_id)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$kode, $nama, $gender, $tmp_lahir, $tgl_lahir, $email, $alamat, $kelurahan_id]);

    echo "✅ Data pasien berhasil ditambahkan!";
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kelurahan_id = $_POST['kelurahan_id'];

    $sql = "UPDATE pasien SET kode=?, nama=?, gender=?, tmp_lahir=?, tgl_lahir=?, email=?, alamat=?, kelurahan_id=? WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$kode, $nama, $gender, $tmp_lahir, $tgl_lahir, $email, $alamat, $kelurahan_id, $id]);

    echo "✅ Data pasien berhasil diubah!";
    header("Location: pasien.php");
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql_edit = "SELECT * FROM pasien WHERE id = ?";
    $stmt = $dbh->prepare($sql_edit);
    $stmt->execute([$id]);
    $pasien = $stmt->fetch();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Tambah Paramedik</title>
    <link rel="stylesheet" href="../assets/style1.css">
</head>
<body>


<h2>Form Tambah Pasien</h2>
<form method="POST">
    <!-- edit -->
    <?php if (isset($pasien['id'])) : ?>
        <input type="hidden" name="id" value="<?= $pasien['id'] ?>">
    <?php endif ?>
    <label>Kode: <input type="text" name="kode" value="<?= isset($pasien['kode']) ? $pasien['kode'] : '' ?>" required></label><br><br>
    <label>Nama: <input type="text" name="nama"  value="<?= isset($pasien['nama']) ? $pasien['nama'] : '' ?>" required></label><br><br>
    <label>Gender:
        <select name="gender" required>
            <option value="">-- Pilih Gender --</option>
            <option value="L" <?= isset($pasien['gender']) && $pasien['gender'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
            <option value="P" <?= isset($pasien['gender']) && $pasien['gender'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
        </select>
    </label><br><br>
    <label>Tempat Lahir: <input type="text" name="tmp_lahir" value ="<?= isset($pasien['tmp_lahir']) ? $pasien['tmp_lahir'] : '' ?>" required></label><br><br>
    <label>Tanggal Lahir: <input type="date" name="tgl_lahir" value ="<?= isset($pasien['tgl_lahir']) ? $pasien['tgl_lahir'] : '' ?>" required></label><br><br>
    <label>Email: <input type="email" name="email" value ="<?= isset($pasien['email']) ? $pasien['email'] : '' ?>"></label><br><br>
    <label>Alamat: <textarea name="alamat"><?= isset($pasien['alamat']) ? $pasien['alamat'] : '' ?></textarea></label><br><br>
    <label>Kelurahan:
        <select name="kelurahan_id"required>
            <option value="">-- Pilih Kelurahan --</option>
            <?php foreach ($list_kelurahan as $kel): ?>
                <option value="<?= $kel['id'] ?>" <?= isset($pasien['kelurahan_id']) && $pasien['kelurahan_id'] == $kel['id'] ? 'selected' : '' ?>><?= $kel['nama'] ?></option>
            <?php endforeach; ?>
        </select>
        <a href="../kelurahan/form_tambah_kelurahan.php" target="_blank">[Tambah Kelurahan Baru]</a>
    </label><br><br>

    <?php if (isset($pasien['id'])) : ?>
        <button type="submit" name="update">Update</button>
    <?php else : ?>
        <button type="submit" name="simpan">Simpan</button>
    <?php endif ?>
</form>