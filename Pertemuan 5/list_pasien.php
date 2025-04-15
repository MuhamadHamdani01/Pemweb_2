<?php
require_once 'dbkoneksi.php';

//4) Buat Query SQL
$sql = "SELECT * FROM pasien";


//5) Eksekusi Query SQL
$rs = $dbh->query($sql); 


//6) Tampilkan Data

$list_pasien = $db->query("SELECT * FROM pasien");
?>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama pasien</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($list_pasien as $idx => $pasien) { ?>
            <tr>
                <td><?=$idx+1?></td>
                <td><?=$pasien['kode']?></td>
                <td><?=$pasien['nama']?></td>
                <td><?=$pasien['gender']?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>










