<?php
require_once 'libs/funciones_articulos.php';

$prompt = htmlspecialchars($_GET['prompt'] ?? null);

$articulos = get_articulos();

$array = [];

foreach ($articulos as $articulo)
{
    if (array_search($prompt, $articulo) !== false)
    {
        $array[] = $articulo;
    }
}

$articulos = $array;

require_once 'views/index.view.php';
?>