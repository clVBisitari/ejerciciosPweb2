<?php

function sumatoria_a( $array ){
    $sumatoria = 0;
    for ($i = 0; $i <= count($array); ++$i ){
        $sumatoria += $array[$i];
    }
    return $sumatoria;
}
function sumatoria_b($array){
    $sumatoria = 0;
    foreach ($array as $item){
        $sumatoria += $item;
    }
    return $sumatoria;
}

function sumatoria_c($array){
    $sumatoria = 0;
    while(count($array) > 0){
        $sumatoria = array_sum($array);
        $array = [];
    }
    return $sumatoria;
}

$vector = [1,2,3,4,5,6,7,8,9];

echo sumatoria_c( $vector );