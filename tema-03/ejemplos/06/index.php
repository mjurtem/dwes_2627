<?php

/*
    Ejemplo 36. Estructura switch como alternativa if elseif
    Descripción: Dada una nota, se ha de devolver el item de calificacion:
        - Insuficiente
        - Suficiente
        - Bien
        - Notable
        - Sobresaliente
*/

$nota = 7;

// estructura switch - evalua un conjunto de condiciones
switch(true)
{
    case ($nota < 5):
        echo "Insuficiente";
        break;
    case ($nota < 6):
        echo "Suficiente";
        break;
    case ($nota < 7):
        echo "Bien";
        break;
    case ($nota < 9):
        echo "Notable";
        break;
    case ($nota <= 10):
        echo "Sobresaliente";
        break;
    default:
        echo "Nota no valida";
        break;
}
?>