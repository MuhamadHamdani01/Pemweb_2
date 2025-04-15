<?php
// index.php
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Klinik</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #74ebd5, #9face6);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .container {
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            padding: 40px 50px;
            width: 100%;
            max-width: 600px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .menu {
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .menu a {
            display: block;
            text-decoration: none;
            background-color: #f0f0f0;
            padding: 16px 20px;
            border-radius: 12px;
            color: #333;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .menu a:hover {
            background-color: #1a73e8;
            color: white;
        }

        @media (min-width: 500px) {
            .menu {
                grid-template-columns: 1fr 1fr;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Dashboard Klinik</h1>
        <div class="menu">
            <a href="kelurahan/kelurahan.php">Kelurahan</a>
            <a href="paramedik/paramedik.php">Paramedik</a>
            <a href="pasien/pasien.php">Pasien</a>
            <a href="periksa/periksa.php">Pemeriksaan</a>
            <a href="unit kerja/unit_kerja.php">Unit Kerja</a>
        </div>
    </div>

</body>
</html>
