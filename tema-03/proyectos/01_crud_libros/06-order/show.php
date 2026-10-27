<?php
/**
 * show.php
 * 
 * Permite mostrar un libro existente a partir de los datos del formulario.
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
// Obtener el indice del libro a mostrar desde la URL
// edit.php?indice=0 - muestro el primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el indice recibido

// Cargar el array de libros
$libros = get_libros();

// Obtenemos el libro a mostrar
$libro = $libros[$indice];

// Cargo la vista de edicion con los detalles del libro a mostrar
require_once 'views/show.view.php';
?>