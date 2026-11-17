<?php

/**
 * new.php
 *
 * Controlador del formulario "Nuevo artículo".
 * Prepara los datos que necesita la vista (marcas y categorías) y la carga.
 */

// Cargar clases
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';
require_once __DIR__ . '/libs/functions.php';

// Marcas y categorías: métodos estáticos, no hace falta crear un objeto Tarticulos
$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();

// Vista
include __DIR__ . '/views/new.view.php';
