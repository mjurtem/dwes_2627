<?php
function get_peliculas()
{
    $peliculas =
    [
        [
            'id' => 1,
            'titulo' => 'Titanic',
            'idioma' => 'Ingles',
            'director' => 'James Cameron',
            'generos' => ['Romance', 'Drama'],
            'año' => 1997,
            'duracion'=> 195,
            'recaudado' => 2.264
        ],
        [
            'id' => 2,
            'titulo' => 'Avatar',
            'idioma' => 'Ingles',
            'director' => 'James Cameron',
            'generos' => ['Ciencia ficción', 'Aventura'],
            'año' => 2009,
            'duracion' => 162,
            'recaudado' => 2.923
        ],
        [
            'id' => 3,
            'titulo' => 'Vengadores: Endgame',
            'idioma' => 'Ingles',
            'director' => 'Anthony y Joe Russo',
            'generos' => ['Acción', 'Ciencia ficción'],
            'año' => 2019,
            'duracion' => 181,
            'recaudado' => 2.799
        ],
        [
            'id' => 4,
            'titulo' => 'Star Wars: El despertar de la Fuerza',
            'idioma' => 'Ingles',
            'director' => 'J. J. Abrams',
            'generos' => ['Ciencia ficción', 'Aventura'],
            'año' => 2015,
            'duracion' => 138,
            'recaudado' => 2.071
        ],
        [
            'id' => 5,
            'titulo' => 'Jurassic World',
            'idioma' => 'Ingles',
            'director' => 'Colin Trevorrow',
            'generos' => ['Ciencia ficción', 'Aventura'],
            'año' => 2015,
            'duracion' => 124,
            'recaudado' => 1.672
        ],
        [
            'id' => 6,
            'titulo' => 'El rey león',
            'idioma' => 'Ingles',
            'director' => 'Jon Favreau',
            'generos' => ['Animación', 'Aventura'],
            'año' => 2019,
            'duracion' => 118,
            'recaudado' => 1.663
        ]
    ];
    return $peliculas;
}

function obtener_id_nueva_pelicula($peliculas = [])
{
    $ultima_pelicula = end($peliculas);
    $ultimo_id = $ultima_pelicula['id'];
    return $ultimo_id + 1;
}
?>