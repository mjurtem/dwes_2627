<?php
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

$tablaAlumnos = new TablaAlumnos();
$tablaAlumnos->addAlumnos();

$alumnos = $tablaAlumnos->talumnos;

$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

include __DIR__ . '/views/index.view.php';
?>