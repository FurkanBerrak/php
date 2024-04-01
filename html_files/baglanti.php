<?php


$host="localhost";
$kullanici="root";
$parola="123";
$vt="kullanicilar";
$baglanti = mysqli_connect($host, $kullanici,$parola, $vt);
mysqli_set_charset($baglanti, "UTF8");
 






?>