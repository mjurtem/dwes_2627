<?php

// is_null() devuelve verdadero:
// Cuando la variable no ha sido definida
// Cuando esta definida sin valor asignado
// Cuando la variable se ha eliminado con unset()

/*  isset(): determina si una variable ha sido declarada y su valor no es nulo
    Devueelve VERDADERO:
    - Cuando la variable ha sido definida
*/

// $var = null;

// if (is_null($var))
// {
//     echo "La variable es nula<br>";
// }
// else
// {
//     echo "La variable no es nula<br>";
// }

// $var1 = null;

// if (isset($var1))
// {
//     echo "La variable está definida<br>";
// }
// else
// {
//     echo "La variable no ha sido definida<br>";
// }

// if (isset($var2))
// {
//     echo "La variable ha sido definida<br>";
// }
// else
// {
//     echo "La variable no ha sido definida<br>";
// }

$var = "0";

if (empty($var))
{
    echo "La variable está vacía<br>";
}
else
{
    echo "La variable no está vacía<br>";
}
?>