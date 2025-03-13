<?php
function salam($nama ="Nurul Fikri") {
    echo "Assalamualikum Apa Kabar Teman! " .$nama;
}
?>
<h1> Selamat Datang di STT-NF </h1>
<p>
<?php
salam("Muhamad Hamdani");
echo "<br>";
salam();
?>