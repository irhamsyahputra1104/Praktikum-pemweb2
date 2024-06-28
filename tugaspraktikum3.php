<?php

echo "<h3>Soal No 1 Looping I Love PHP</h3>";

echo "Output: <br> <br>LOOPING PERTAMA: <br>";
// Looping Pertama
echo "Ascending Loop: <br>";
for ($i = 2; $i <= 20; $i += 2) {
    echo "$i: I Love PHP <br>";
}

echo "<br>LOOPING KEDUA: <br>";
// Looping Kedua
echo "<br>Descending Loop: <br>";
for ($i = 20; $i >= 2; $i-= 2) {
    echo "$i: I Love PHP <br>";
}

echo "<h3>Soal No 2 Function Tentukan Nilai</h3>";

// Function untuk menentukan nilai
function tentukan_nilai($nilai)
{
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik";
    } elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik";
    } elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup";
    } else {
        return "Kurang";
    }
}

// Tes function
echo tentukan_nilai(98); // Output: Sangat Baik
echo "<br>";
echo tentukan_nilai(76); // Output: Baik
echo "<br>";
echo tentukan_nilai(67); // Output: Cukup
echo "<br>";
echo tentukan_nilai(43); // Output: Kurang
?>
