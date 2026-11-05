<?php
require_once 'libs/functions.php';

$titulo = htmlspecialchars($_POST['titulo'] ?? null);
$idioma = htmlspecialchars($_POST['idioma'] ?? null);
$director = htmlspecialchars($_POST['director'] ?? null);
$generos = htmlspecialchars($_POST['generos'] ?? null);
$año = htmlspecialchars($_POST['año'] ?? null);
$duracion = htmlspecialchars($_POST['duracion'] ?? null);
$recaudado = htmlspecialchars($_POST['recaudado'] ?? null);

$peliculas = get_peliculas();

$pelicula_editada =
[
    'id' => $pelicula['indice'],
    'titulo' => $titulo,
    'idioma' => $idioma,
    'director' => $director,
    'generos' => explode(', ', $generos),
    'año' => $año,
    'duracion' => $duracion,
    'recaudado' => $recaudado
];


require_once 'views/index.view.php';
?>