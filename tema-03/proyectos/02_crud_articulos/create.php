<?php
require_once 'libs/funciones_articulos.php';

$descripcion = htmlspecialchars($_POST['descripcion'] ?? '');
$modelo = htmlspecialchars($_POST['modelo'] ?? '');
$categoria = htmlspecialchars($_POST['categoria'] ?? '');
$unidades = htmlspecialchars($_POST['unidades'] ?? '');
$precio = htmlspecialchars($_POST['precio'] ?? '');

$articulos = get_articulos();

$id = get_ultimo_id($articulos);

$nuevo_articulo =
[
    'id' => $id,
    'descripcion' => $descripcion,
    'modelo' => $modelo,
    'categoria' => explode(', ', $categoria),
    'unidades' => $unidades,
    'precio' => $precio
];

$articulos[] = $nuevo_articulo;
include 'views/index.view.php';
?>