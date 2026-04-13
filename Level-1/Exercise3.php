<?php
/*
a) Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y:

El valor de cada variable.
La suma.
La resta.
El producte.
El mòdul.
Per N i M realitzaràs el mateix.

I per a totes les variables (X, Y, N, M):

El doble de cada variable.
La suma de totes les variables.
El producte de totes les variables.
*/


$X = 5;
$Y = 7;
$N = 2.8;
$M = 6.3;

echo "The value of X is: $X" . "<br>";
echo "The value of Y is: $Y" . "<br>";
echo "$X + $Y = " . ($X + $Y) . "<br>";
echo "$X - $Y = " . ($X - $Y) . "<br>";
echo "$X * $Y = " . ($X * $Y) . "<br>";
echo "$X % $Y = " . ($X % $Y) . "<br>";

echo "The value of N is: $N" . "<br>";
echo "The value of M is: $M" . "<br>";
echo "$N + $M = " . ($N + $M) . "<br>";
echo "$N - $M = " . ($N - $M) . "<br>";
echo "$N * $M = " . ($N * $M) . "<br>";
echo "$N % $M = " . fmod($N, $M) . "<br>";

echo "The double of X is = " . ($X * 2) . "<br>";
echo "The double of Y is = " . ($Y * 2) . "<br>";
echo "The double of N is = " . ($N * 2) . "<br>";
echo "The double of M is = " . ($M * 2) . "<br>";

echo "$X + $Y + $N + $M = " . ($X + $Y + $N + $M) . "<br>";
echo "$X * $Y * $N * $M = " . ($X * $Y * $N * $M) . "<br>";

/*
b) Crea un programa que tingui una funció que rebi dos nombres per paràmetre, i en un tercer paràmetre que indiqui una operació aritmética(suma,resta,multiplicació o divisió dels dos nombres).

Pensa en tots els casos possibles que ha de tenir aquest programa abans de fer-lo! */


function calculation($num1, $num2, $operator){

    switch ($operator){

        case "+":
            return $num1 + $num2;

        case "-":
            return $num1 - $num2;

        case "*":
            return $num1 * $num2;

        case "/":
            if ($num2 == 0){
                return "Cannot divide by zero";
            }
            return $num1 / $num2;

        default:
            return "Invalid operator";
    }
}

// Testing
echo calculation(10, 5, "+") . "<br>";
echo calculation(10, 5, "-") . "<br>";
echo calculation(10, 5, "*") . "<br>";
echo calculation(10, 0, "/") . "<br>"; 
echo calculation(10, 5, "/") . "<br>";



?>

