<?php
    $namadepan = $_GET['firstname'];
    $namabelakang = $_GET['lastname'];
    $TTL = $_GET['Tempattgllhr'];
    $gender = $_GET['JK'];
    $jeniskpl = $_GET['JenisKapal'];
    $tombol = $_GET['submit'];

    echo "<h1> Identitas Nelayan</h1>";
    echo "Nama Depan    : " .$namadepan."<br>";
    echo "Nama Belakang : " .$namabelakang."<br>";
    echo "TTL           : " .$TTL."<br>";
    echo "Jenis Kelamin : " .$gender. "<br>";
    echo "Jenis Kapal   : " .$jeniskpl. "<br>";

?>
