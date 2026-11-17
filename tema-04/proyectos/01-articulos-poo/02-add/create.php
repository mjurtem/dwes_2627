<?php

/**
 * create.php
 *
 * Controlador que procesa el formulario de new.view.php:
 *  1. Carga las clases.
 *  2. Crea el objeto Articulo con todos sus atributos y lo añade a la colección.
 *  3. Carga index.view.php para mostrar el listado.
 */

// 1. Cargar clases
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';

// Colección de artículos
$tabla_articulos = new Tarticulos();
$tabla_articulos->addArticulos();
$articulos = $tabla_articulos->getTarticulos();

// Marcas y categorías (la vista las necesita para el listado)
$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();

// 2. Crear el artículo con los datos del formulario
$articulo = new Articulo(
    end($articulos)->getId() + 1,                 // id automático: último id + 1
    $_POST['descripcion'],
    $_POST['modelo'],
    $_POST['marca'],                              // índice de la marca
    array_map('intval', $_POST['categorias'] ?? []), // índices de las categorías
    (int) $_POST['unidades'],
    (float) $_POST['precio']
);

$tabla_articulos->addArticulo($articulo);
$articulos = $tabla_articulos->getTarticulos();

// 3. Vista
include __DIR__ . '/views/index.view.php';
