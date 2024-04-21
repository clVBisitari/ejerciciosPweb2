<?php

function incrementar(&$a){
    $a++;
}

$numero = 10;
echo incrementar($numero);
echo $numero;
