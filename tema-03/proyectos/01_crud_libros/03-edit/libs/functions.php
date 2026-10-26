<?php

/*
    librería: functions.php
    Funciones auxiliares para el proyecto CRUD de libros.

    Funciones incluidas:
        - get_libros(): Devuelve un array con todos los libros creados.
*/

// Funcion get_libros(): Devuelve un array con todos los libros creados.
function get_libros()
{
    // Array de libros (simulando una base de datos)
    $libros =
        [
            [
                'id' => 1,
                'titulo' => 'Cien años de soledad',
                'autor' => 'Gabriel García Márquez',
                'editorial' => 'Editorial Sudamericana',
                'generos' => ['Realismo mágico', 'Novela'],
                'precio' => 19.99
            ],
            [
                'id' => 2,
                'titulo' => 'Don Quijote de la Mancha',
                'autor' => 'Miguel de Cervantes',
                'editorial' => 'Francisco de Robles',
                'generos' => ['Novela', 'Aventura'],
                'precio' => 15.50
            ],
            [
                'id' => 3,
                'titulo' => 'La sombra del viento',
                'autor' => 'Carlos Ruiz Zafón',
                'editorial' => 'Planeta',
                'generos' => ['Misterio', 'Novela'],
                'precio' => 18.75
            ],
            [
                'id' => 4,
                'titulo' => 'El principito',
                'autor' => 'Antoine de Saint-Exupéry',
                'editorial' => 'Salamandra',
                'generos' => ['Literatura infantil', 'Fábula'],
                'precio' => 12.99
            ],
            [
                'id' => 5,
                'titulo' => 'La casa de los espíritus',
                'autor' => 'Isabel Allende',
                'editorial' => 'Plaza & Janés',
                'generos' => ['Realismo mágico', 'Novela'],
                'precio' => 17.25
            ]
        ];

    return $libros;
}

// Funcion obtener ultimo id del array

function obtener_id_nuevo_libro($libros = [])
{
    // Obtener el último libro del array
    $ultimo_libro = end($libros);

    // Obtener el id del ultimo libro
    $ultimo_id = $ultimo_libro['id'];

    // Devolver el id del nuevo libro (+1)
    return $ultimo_id + 1;
}
?>