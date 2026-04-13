<?php
/*
Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà.
*/

function studentGrade($score){

    if ($score >= 60){
        return "1st division";
    } else if ($score >= 45){
        return "2nd division";
    } else if ($score >= 33){
        return "3rd division";
    } else{
        return "Fail";
    }
}

// Testing
echo studentGrade(75) . "<br>";
echo studentGrade(50) . "<br>";
echo studentGrade(40) . "<br>";
echo studentGrade(20) . "<br>";


?>

