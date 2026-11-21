<?php

/*
    index.php
    Carga la página principal del proyecto CRUD de alumnos.

*/

// Cargar las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 1. Crear objeto de la clase TablaAlumnos
$tablaAlumnos = new TablaAlumnos();

// 2. Cargar los datos en la tabla de  alumnos
$tablaAlumnos->addAlumnos();

// 3. Obtener la tabla con los alumnos
$alumnos = $tablaAlumnos->talumnos;

// 4. Cargar los cursos para la tabla
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 5. Carga la vista principal
include __DIR__ . '/views/index.view.php';
?>