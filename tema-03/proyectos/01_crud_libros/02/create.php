<?php
/**
 * create.php
 * 
 * Permite crear un nuevo libro a partir de los datos del formulario.
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

// Extraer los datos del formulario
$titulo = htmlspecialchars($_POST['titulo'] ?? '');
$autor = htmlspecialchars($_POST['autor'] ?? '');
$editorial = htmlspecialchars($_POST['editorial'] ?? '');
$generos = htmlspecialchars($_POST['generos'] ?? '');
$precio = htmlspecialchars($_POST['precio'] ?? '');

// Proceso de validacion de los datos del formulario
$errores = [];


// Obtener el array de libros existente
$libros = get_libros();

// Obtener id del nuevo libro creado
$new_book_id = obtener_id_nuevo_libro($libros);

// Crear un array asociativo del nuevo libro
$new_book =
[
    'id' => $new_book_id,
    'titulo' => $titulo,
    'autor' => $autor,
    'editorial' => $editorial,
    'generos' => explode(',', $generos),
    'precio' => $precio
];

// Agregar el nuevo libro al array de libros
$libros[] = $new_book;

// Views
include 'views/index.view.php';
?>