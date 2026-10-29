<?php
require_once 'libs/funciones_articulos.php';

$indice = htmlspecialchars($_GET['indice'] ?? null);

$articulos = get_articulos();

$descripcion = htmlspecialchars($_POST['descripcion'] ?? null);
$modelo = htmlspecialchars($_POST['modelo'] ?? null);
$categoria = htmlspecialchars($_POST['categoria'] ?? null);
$unidades = htmlspecialchars($_POST['unidades'] ?? null);
$precio = htmlspecialchars($_POST['precio'] ?? null);

$articulo_editado =
[
    'id' => $articulos[$indice]['id'],
    'descripcion' => $descripcion,
    'modelo' => $modelo,
    'categorias' => explode(', ' ,$categoria),
    'unidades' => $unidades,
    'precio' => $precio
];

$articulos[$indice] = $articulo_editado;

require_once 'views/index.view.php';
?>