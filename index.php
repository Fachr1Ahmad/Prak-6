<?php
// Fungsi yang digunakan untuk mengubah bilangan integer ke bilangan Romawi
function intToRoman($num) {
    // Array dengan nilai-nilai dasar bilangan Romawi
    $roman_numerals = array(
        'M'  => 1000,
        'CM' => 900,
        'D'  => 500,
        'CD' => 400,
        'C'  => 100,
        'XC' => 90,
        'L'  => 50,
        'XL' => 40,
        'X'  => 10,
        'IX' => 9,
        'V'  => 5,
        'IV' => 4,
        'I'  => 1
    );
    $result = ''; // Menyimpan hasil konversi
    foreach ($roman_numerals as $roman => $int) {
        while ($num >= $int) {
            $result .= $roman;
            $num -= $int;
        }
    }
    // Mengembalikan Hasil konversi bilangan integer ke bilangan Romawi
    return $result;
}
// Contoh penggunaan fungsi intToRoman(
echo intToRoman(1994); // Menampilkan "angka yang ingin ditentukan"
