<?php

/*
Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.
*/

function callCost($minutes){

    if ($minutes < 3){
        return 10; 
    }

    $extraMinutes = $minutes - 3;
    return 10 + ($extraMinutes * 5);
}

//Testing
echo callCost(2) . " cents <br>";   
echo callCost(3) . " cents <br>";   
echo callCost(5) . " cents <br>";   

?>