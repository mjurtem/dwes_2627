<?php

/*
    controladdor: new.php
    
    descripción: carga el formulario para añadir un nuevo alumno a la tabla.
*/

// Cargar las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 1. Cargar los cursos y categorías para el formulario
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 2. Carga la vista de añadir
include __DIR__ . '/views/new.view.php';
?>