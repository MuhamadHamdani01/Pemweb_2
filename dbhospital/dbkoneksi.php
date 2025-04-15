<?php
//1) varuabel untuk koneksi database
$host = "localhost";
$dbname = "dbklinik";
$username = "root";
$password = "";
$charset = "utf8mb4";

//2) Buat DSN dan opsi akses Database
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $db = new PDO($dsn, $username, $password, $options);
    echo "Koneksi berhasil";
} catch (\Throwable $th) {
    echo "Koneksi gagal : ". $th;
}

//3) Buat objek koneksi Database
$dbh = new PDO($dsn, $username, $password, $options);
?>