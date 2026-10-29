<?php
require_once 'libs/funciones_articulos.php';

$articulos = get_articulos();

include 'views/index.view.php';
?>