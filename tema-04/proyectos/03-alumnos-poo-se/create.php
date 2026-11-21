<?php

/*
    controladdor: create.php
    
    descripción: añade un alumno de la tabla a partir de su id y redirige a la página principal.

    parámetros formulario (POST):

        - nombre: nombre del alumno a añadir
        - apellidos: apellidos del alumno a añadir.
        - email: correo del alumno a añadir.
        - f_nacimiento: fecha de nacimiento del alumno a añadir.
        - curso: indice del curso del alumno a añadir.
        - asignaturas: array de indices de las asignaturas del alumno a añadir.
*/

// Cargar las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 1. Obtener los parametros del alumno a añadir
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$f_nacimiento = $_POST['f_nacimiento'];
$curso = $_POST['curso'];
$asignaturas = $_POST['asignaturas'];

// 2. Crear objeto de la clase TablaAlumnos
$tablaAlumnos = new TablaAlumnos();

// 3. Cargar los datos en la tabla de  alumnos
$tablaAlumnos->addAlumnos();

// 4. Crear el id del alumno nuevo
$id = $tablaAlumnos->idNuevoAlumno();

// 5. Crear el objeto Alumno a partir de los parametros
$nuevoAlumno = new Alumno($id, $nombre, $apellidos, $email, $f_nacimiento, $curso, $asignaturas);

// 6. Añadir el alumno a la tabla
$tablaAlumnos->create($nuevoAlumno);

// 7. Obtener la tabla con el alumno nuevo
$alumnos = $tablaAlumnos->talumnos;

// 8. Cargar los cursos y categorías para el formulario
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 9. Carga la vista principal
include __DIR__ . '/views/index.view.php';
?>