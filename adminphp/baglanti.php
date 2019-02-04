<?php

session_start();

$sunucu = "localhost"; 
$kullanici = "root"; 
$parola = ""; 
$tablo = "mavibilisim";

$baglanti= mysqli_connect($sunucu,$kullanici,$parola,$tablo);

if (!$baglanti) {
 die("BAĞLANTI HATASI!" . mysqli_connect_error());
}