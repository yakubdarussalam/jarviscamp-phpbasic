<?php
//Funftion untuk pembagian dua parameter
function pembagian ($nilai1,$nilai2){
    $hasil = $nilai1 / $nilai2;
    echo "Hasil Pembagian dari $nilai1 : $nilai2 adalah ";
    return $hasil;
};

echo pembagian (100,5);