<?php
require_once 'libs/funciones_articulos.php';

$criterio = htmlspecialchars($_GET['criterio'] ?? null);

$articulos = get_articulos();

$array_ordenado = array_column($articulos, $criterio);

array_multisort($array_ordenado, SORT_ASC, $articulos);

require_once 'views/index.view.php';
?>