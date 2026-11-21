<?php

/*
    controladdor: edit.php
    
    descripción: carga el formulario para editar a un alumno de la tabla a partir de su id.

    parámetro URL (GET):

        - id: identificador del alumno a editar.
*/

// Cargar las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';


// 1. Obtener id del alumno a editar desde la URL
$id = $_GET['id'];

// 2. Crear objeto de la clase TablaAlumnos
$tablaAlumnos = new TablaAlumnos();

// 3. Cargar los datos en la tabla de  alumnos
$tablaAlumnos->addAlumnos();

// 4. Buscar el alumno a editar por su id
$alumno = $tablaAlumnos->getAlumnoById($id);

// 5. Cargar los cursos y categorías para el formulario
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 6. Carga la vista de edicion
include __DIR__ . '/views/edit.view.php';
?>