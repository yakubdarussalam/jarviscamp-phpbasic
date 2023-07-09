<?php
//Tipe data integer
$umur = 22;

//Tipe data float
$beratBadan = 90.05;

//Tipe data string
$nama = "Ya'kub Darussalam";
$alamat = 'Bekasi';

//Tipe data boolean
$statusMenikah = false;

//Tipe data array (Urutan array dimulai dari 0 paling kiri)
//Array indexing
$hobi = ["Makan","Tidur","Main","Jajan"];
$biodata = ["Ya'kub Darussalam",22,90,'Bekasi'];

echo "Hallo Nama Saya $biodata [0], Umur Saya Adalah $biodata [1] tahun.";

//Array asosiatif
$mahasiswa = ["Nama" => "Ya'kub darussalam","Umur" => 22, "Prodi" => "TI"]; 

echo "Hi nama saya $mahasiswa [Nama],Saya seorang mahasiswa prodi $mahasiswa[Prodi]";

//Untuk melihat tipe datanya
echo "<br>";
var_dump($umur,$beratBadan,
$nama,$alamat, $statusMenikah, $hobi);



echo "<br>";
echo "Nama : ".$nama."<br>"."Umur : ".$umur."<br>"."Berat Badan : ".$beratBadan;

//Perbedaan "" dan ''
echo "<br>";

echo 'Hello $nama';
echo "<br>";

echo "Hello $nama";
echo "<br>";

//Tanda "" jika didalamnya ada variable akan terpanggil
//Tanda '' jika didalamnya tidak ada variable tidak akan terpanggil
//Jika kita mau memasukan tanda '' di browser maka bisa mengunakan ""

echo "Saya akan menampilkan 'angka' pada variable";

