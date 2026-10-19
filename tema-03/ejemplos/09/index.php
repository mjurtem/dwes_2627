<?php

/*
    Paramatros por valor o referancia:
    - Por valor: se pasa una copia del valor de la variable a la funcion. 
      Los cambios realizados dentro de la funcion no afectan al parametro
    - Por referancia:
*/

function sumar_uno($x)
{
    return $x++;
}

$a = 2;
echo sumar_uno($a);
echo $a;
// Parametro por referencia
function sumar_dos(&$x)
{
    $x += 2;
    return $x;
}

$a = 2;
echo sumar_dos($a); // 4
echo $a; // 4, la variable original se modifica
?>