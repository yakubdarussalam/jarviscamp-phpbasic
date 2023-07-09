<?php
//Membuat fungtion

function pengurangan ($nilai1,$nilai2){
    $hasil = $nilai1 - $nilai2;
    //echo "Hasilnya pengurangan $nilai1 - $nilai2 adalah : ".$hasil;
    return $hasil;
};

echo pengurangan (10,5);
echo "<br>";
echo pengurangan (5000,1313);
echo "<br>";


//return : mengembalikan hasil ke variable
//jika echo di dalam function maka variable hasil tidak dapat digunakan pada function lain

function perkalian ($nilai1,$nilai2){
    return $nilai1 * $nilai2;
    
};


$pengurangan1 = pengurangan (50,35);
$pengurangan2 = pengurangan (20, 5);


echo perkalian ($pengurangan1, $pengurangan2);
