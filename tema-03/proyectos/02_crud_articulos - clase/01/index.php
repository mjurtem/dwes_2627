<?php
/**
 * index.php
 * 
 * Página principal del proyecto CRUD de articulos.
 * Muestra una lista de articulos y permite agregar, editar y eliminar articulos.
 * 
 * @package     CRUD Libros
 * @author      Tu Nombre
 * @version     1.0
 * 
 * Tabla articulos:
 * - id (INT, PRimary KEY, AUTO_INCREMENT)
 * - descripcion (VARCHAR(255))
 * - modelo (VARCHAR(255))
 * - categorias (VARCHAR(255))
 * - unidades
 * - precio
*/

// Cargar librerias
require_once 'libs/functions.php';

// Models


// Negociado
$articulos = get_articulos();

// Views
include 'views/index.view.php';
?>