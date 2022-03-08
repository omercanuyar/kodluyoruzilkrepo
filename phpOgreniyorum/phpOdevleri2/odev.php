<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];


function silVeRandomOlustur($dizi,$int){

    $dizi1 = array_filter($dizi);
    $key = array_rand($dizi1,$int);
    print_r($key);
    
     
}

print_r(silVeRandomOlustur($planets,3))

?>