<?php

/*
    controladdor: update.php
    
    descripción: actualiza a un alumno de la tabla a partir de su id y redirige a la página principal.

    parámetro URL (GET):

        - id: identificador del alumno a eliminar.
*/

// Cargar las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 1. Obtener id del alumno a eliminar desde la URL
$id = $_GET['id'];

// 2. Obtener los parametros del alumno a añadir
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$f_nacimiento = $_POST['f_nacimiento'];
$curso = $_POST['curso'];
$asignaturas = $_POST['asignaturas'];

// 3. Crear objeto de la clase TablaAlumnos
$tablaAlumnos = new TablaAlumnos();

// 4. Cargar los datos en la tabla de  alumnos
$tablaAlumnos->addAlumnos();

// 5. Crear el objeto Alumno a partir de los parametros
$nuevoAlumno = new Alumno($id, $nombre, $apellidos, $email, $f_nacimiento, $curso, $asignaturas);

// 6. Obtener el indice del array de alumnos
$indice = $tablaAlumnos->getIndiceById($id);

// 7. Sobreescrir el alumno del array 
$tablaAlumnos->update($nuevoAlumno, $indice);

// 8. Obtener la tabla con el alumno nuevo
$alumnos = $tablaAlumnos->talumnos;

// 9. Cargar los cursos y categorías para el formulario
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 10. Carga la vista principal
include __DIR__ . '/views/index.view.php';
?>