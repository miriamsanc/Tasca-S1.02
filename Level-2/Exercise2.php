<?php

/*
Imagina que estàs programant part de la lògica de la classificació de punts d'un joc. En aquest programa necessitem entrar 3 puntuacions diferents(les puntuacions són entre 0 i 9999). D'aquestes puntuacions necessitarem:

La seva suma
La seva mitjana
La classificació. Sent "Principiant" menor de 4000. "Intermedi" menor de 8000 i "Professional" la resta.
Pensa a fer més d'una funció per resoldre aquest problema.
*/

function sumPoints($x, $y, $z){
    return $x + $y + $z;
}
function averagePoints($x, $y, $z){
    return ($x + $y + $z) / 3;
}
function classification($points){

    if ($points < 4000){
        return "Beginner";
    } elseif ($punts < 8000){
        return "Intermediate";
    } else{
        return "Professional";
    }
}

//Testing
$score1 = 3500;
$score2 = 4200;
$score3 = 9000;

$total = sumPoints($score1, $score2, $score3);
$average = averagePoints($score1, $score2, $score3);
$level = classification($total);

echo "Total sum: $total <br>";
echo "Average: $average <br>";
echo "Classification: $level <br>";

?>