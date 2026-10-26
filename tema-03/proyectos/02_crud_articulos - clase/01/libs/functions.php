<?php

/*
    librería: functions.php
    Funciones auxiliares para el proyecto CRUD de articulos.

    Funciones incluidas:
        - get_articulos(): Devuelve un array con todos los articulos creados.
*/

// Funcion get_articulos(): Devuelve un array con todos los articulos creados.
function get_articulos()
{
    // Array de articulos (simulando una base de datos)
    $articulos =
        [
            [
            'id' => 1,
            'descripcion' => 'Portátil para uso profesional',
            'modelo' => 'ThinkPad E14',
            'categorias' => ['Electrónica', 'Informática'],
            'unidades' => 12,
            'precio' => 749.99
            ],
            [
                'id' => 2,
                'descripcion' => 'PC de sobremesa para oficina',
                'modelo' => 'OptiPlex 7010',
                'categorias' => ['Electrónica', 'Informática'],
                'unidades' => 8,
                'precio' => 899.50
            ],
            [
                'id' => 3,
                'descripcion' => 'Memoria RAM DDR5 de 16 GB',
                'modelo' => 'Kingston Fury Beast',
                'categorias' => ['Electrónica', 'Informática'],
                'unidades' => 25,
                'precio' => 64.95
            ],
            [
                'id' => 4,
                'descripcion' => 'Pantalla LED de 27 pulgadas',
                'modelo' => 'LG UltraGear 27GN800',
                'categorias' => ['Electrónica', 'Informática'],
                'unidades' => 10,
                'precio' => 279.00
            ],
            [
                'id' => 5,
                'descripcion' => 'Impresora multifunción a color',
                'modelo' => 'HP OfficeJet Pro 9010e',
                'categorias' => ['Electrónica', 'Informática'],
                'unidades' => 6,
                'precio' => 189.99
            ]
        ];

    return $articulos;
}
?>