<?php
function binomioCuadradoPerfecto_a($a, $b){
    return pow($a, 2) + (2 * $a * $b) + pow($b, 2);
}

function binomioCuadradoPerfecto_b($a, $b){
    return (($a ** 2) + 2 * $a * $b + ($b ** 2) );
}


echo binomioCuadradoPerfecto_a(5, 3);
echo "   ";
echo binomioCuadradoPerfecto_b(5, 3);
