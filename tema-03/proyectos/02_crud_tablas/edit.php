<?php
require_once 'libs/funciones_articulos.php';

$indice = htmlspecialchars($_GET['indice'] ?? null);
$articulos = get_articulos();
$articulo = $articulos[$indice];

require_once 'views/edit.view.php';
?>