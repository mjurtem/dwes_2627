<?php
/**
 * edit.php
 * 
 * Permite editar un libro existente a partir de los datos del formulario.
 * 
 * @package     CRUD Libros
 * @author      Tu Nombre
 * @version     1.0
 * 
 * Tabla libros:
 * - id (INT, PRimary KEY, AUTO_INCREMENT)
 * - titulo (VARCHAR(255))
 * - autor (VARCHAR(255))
 * - editorial (VARCHAR(255))
 * - generos
 * - precio
*/

// Cargar librerias
require_once 'libs/functions.php';

// Models


// Negociado
// Obtener el indice del libro a editar desde la URL
// edit.php?indice=0 - edito el primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el indice recibido

// Cargar el array de libros
$libros = get_libros();

// Obtenemos el libro a editar
$libro = $libros[$indice];

// Cargo la vista de edicion con los detalles del libro a editar
require_once 'views/edit.view.php';
?>