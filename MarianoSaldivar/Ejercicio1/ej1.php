<?php
function semaforo_a($color){
    if($color == 'rojo') echo "frene";
    elseif($color == 'amarillo') echo "precaucion";
    elseif($color == 'verde') echo "avance";
    elseif ($color == 'azul') echo "estado desconocido";
}

function semaforo_b($color){
    return ($color == 'rojo') ? "frene" :
        (($color == 'amarillo') ? "precaucion" :
            (($color == 'verde') ? "avance" : "estado desconocido"));
}
function semaforo_c($color){
    switch ($color){
        case 'rojo':
            echo "frene";
            break;
        case 'amarillo':
            echo "precaucion";
            break;
        case 'verde':
            echo "avance";
            break;
        default:
            echo "estado desconocido";
            break;
    }
}

echo semaforo_a("rojo");
echo "   ";
echo semaforo_b("amarillo");
echo "   ";
echo semaforo_c("verde");