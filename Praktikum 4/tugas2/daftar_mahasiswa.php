<?php 
require_once 'class_nilaimahasiswa.php';

$nilai1 = new NilaiMahasiswa("Matematika", 80, "02011");
$nilai2 = new NilaiMahasiswa("Matematika", 60, "02012");
$nilai3 = new NilaiMahasiswa("Matematika", 50, "01011");
$nilai4 = new NilaiMahasiswa("Matematika", 30, "01012");
$nilai5 = new NilaiMahasiswa("Matematika", 20, "01013"); 

$daftar_nilai = [$nilai1, $nilai2, $nilai3, $nilai4, $nilai5];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai ujian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary mx-5">
        <div class="container-fluid">
            <a class="navbar-brand text-secondary" href="#">WEB02</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Review PHP
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            PHP5 OOP
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" aria-label="Search">
                    <button class="btn btn-light" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </nav>
    <h3>Form Nilai Ujian</h3>
    <hr>
    <form action="" method="post" class="d-flex flex-column">
        <div>
            <label for="nim" class="form-label">NIM</label>
            <input type="text" maxlength="12" minlength="12" name="nim" id="nim" class="form-control">
        </div>
        <div>
            <label for="mk" class="form-label">Pilih MK</label>
            <select name="mk" id="mk" class="form-select">
                <option value="Data Warehouse">Data Warehouse</option>
                <option value="Programming">Programming</option>
                <option value="Matematika">Matematika</option>
                <option value="Basis Data">Basis Data</option>
            </select>
        </div>
        <div>
            <label for="nilai" class="form-label">Nilai</label>
            <input type="number" name="nilai" id="nilai" class="form-control">
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>