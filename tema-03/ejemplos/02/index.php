<?php
/*
    Ejemplo 32. if, elde, elseif y operador ternario
    Descripción: Determinar el item de calificación de un examen

    La calificacion sera:
        - suspenso
        - suficiente
        - bien
        - notable
        - sobresaliente
*/

$nota = 7;

if ($nota < 0 || $nota > 10)
{
    echo "Error";
}
else if ($nota >= 0 && $nota < 5)
{
    echo "Suspenso";
}
else if ($nota == 5)
{
    echo "Suficiente";
}
else if ($nota == 6)
{
    echo "Bien";
}
else if ($nota > 6 && $nota <= 8)
{
    echo "Notable";
}
else
{
    echo "Sobresaliente";
}
?>