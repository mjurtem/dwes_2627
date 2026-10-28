<?php
require_once 'libs/funciones_articulos.php';

$indice = htmlspecialchars($_GET['indice'] ?? null);

$articulos = get_articulos();

$descripcion = htmlspecialchars($_POST['descripcion']);
$modelo = htmlspecialchars($_POST['modelo']);
$categoria = htmlspecialchars($_POST['categoria']);
$unidades = htmlspecialchars($_POST['unidades']);

require_once 'views/edit.view.php';
?>