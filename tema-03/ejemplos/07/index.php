<?php
/*
    Tipos de arrays:
        - escalares o indexados
*/

// Array escalar o indexado
// $colores = array("rojo", "verde", "azul", "amarillo");

$colores = ["rojo", "verde", "azul", "amarillo"];

// Acceder a un elemento del array
echo $colores[0]; // rojo

// Recorrer un array con un bucle for
for ($i = 0; $i < count($colores); $i++)
{
    echo $colores[$i] . "<br>";
}

// Recorrer un array con un bucle foreach
foreach ($colores as $color)
{
    echo $color . "<br>";
}

// Agregar elemento array
$colores[] = "naranja"; // Agrega el elemento "naranja" al final del array

// Eliminar un elemento array
unset($colores[1]); // Elimina el elemento con índice 1 (verde)

// Recorrer array mostrando índice y valor
foreach ($colores as $indice => $color)
{
    echo "Índice: $indice, Color: $color <br>";
}

// Modificar elemento array
$colores[2] = "violeta"; // Cambia el valor del elemento con 
?>