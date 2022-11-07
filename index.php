<?php
echo "<pre>";
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];


function rastgeleDiziDegeriDondur($dizi,$deger){
    $new_planets = array_filter($dizi); //boş ve null verileri temizler
    $arr_keys = array_rand($new_planets,$deger); //fonksiyondaki dışarıdan verilen değer kadar random key çeker
    $my_planets = []; //içine eleman push edilecek yeni dizi
    for($i=0; $i < $deger; $i++){
        array_push($my_planets,$new_planets[$arr_keys[$i]]);//push ile oluşturduğumuz yeni dizinin içerisine girilen değer sayısı kadar eleman aktarma
    }
    print_r($my_planets);
}

rastgeleDiziDegeriDondur($planets,2);
rastgeleDiziDegeriDondur($planets,6);
rastgeleDiziDegeriDondur($planets,3);
rastgeleDiziDegeriDondur($planets,4);

?>