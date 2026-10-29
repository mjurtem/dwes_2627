<?php
function get_articulos()
{
    $articulos = 
    [
        [
            'id' => 1,
            'descripcion' => 'Portátil para uso profesional',
            'modelo' => 'ThinkPad E14',
            'categorias' => ['Informática','Equipo'],
            'unidades' => 12,
            'precio' => 749.99
        ],
        [
            'id' => 2,
            'descripcion' => 'PC de sobremesa para oficina',
            'modelo' => 'OptiPlex 7010',
            'categorias' => ['Informática','Equipo'],
            'unidades' => 8,
            'precio' => 899.50
        ],
        [
            'id' => 3,
            'descripcion' => 'Memoria RAM DDR5 de 16 GB',
            'modelo' => 'Kingston Fury Beast',
            'categorias' => ['Informática','Componente'],
            'unidades' => 25,
            'precio' => 64.95
        ],
        [
            'id' => 4,
            'descripcion' => 'Pantalla LED de 27 pulgadas',
            'modelo' => 'LG UltraGear 27GN800',
            'categorias' => ['Informática','Periferico'],
            'unidades' => 10,
            'precio' => 279.00
        ],
        [
            'id' => 5,
            'descripcion' => 'Impresora multifunción a color',
            'modelo' => 'HP OfficeJet Pro 9010e',
            'categorias' => ['Informática','Equipo'],
            'unidades' => 6,
            'precio' => 189.99
        ]
    ];
    return $articulos;
}

function get_ultimo_id($articulos = [])
{
    $ultimo_articulo = end($articulos);
    $ultimo_id = $ultimo_articulo['id'];

    return $ultimo_id + 1;
}
?>