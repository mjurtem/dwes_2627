<?php
require_once 'libs/functions.php';

$titulo = htmlspecialchars($_POST['titulo'] ?? '');
$idioma = htmlspecialchars($_POST['idioma'] ?? '');
$director = htmlspecialchars($_POST['director'] ?? '');
$generos = htmlspecialchars($_POST['generos'] ?? '');
$año = htmlspecialchars($_POST['año'] ?? '');
$duracion = htmlspecialchars($_POST['duracion'] ?? '');
$recaudacion = htmlspecialchars($_POST['recaudacion'] ?? '');
$peliculas = get_peliculas();

$id = obtener_id_nueva_pelicula($peliculas);

$nueva_pelicula =
[
    'id' => $id,
    'titulo' => $titulo,
    'idioma' => $idioma,
    'director' => $director,
    'generos' => explode(', ', $generos),
    'año' => $año,
    'duracion' => $duracion,
    'recaudado' => $recaudacion
];

$peliculas[] = $nueva_pelicula;
include 'views/index.view.php';
?>