<?php
//array asosiatif
$mahasiswa = ["Nama"=>"Irham", "Umur"=>20, "Alamat"=>"Depok"];

echo $mahasiswa["Nama"] . "<br>";

foreach ($mahasiswa as $key => $value) {
    echo $key . " : " . $value;
    echo "<br>";
}

echo "<br>";
?>