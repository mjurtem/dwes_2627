<?php
/*
 Proyeto: proyecto 2.2 - Cálculo Lanzamiento de Proyectiles
 Descripcion: dada la velocidad inicial y el angulo de lanzamiento, calcular:
   - la altura máxima
   - el tiempo de vuelo
   - la distancia horizontal del proyectil
   - velocidad inicial horizontal
   - velocidad inicial vertical

 Alumno: Miguel A. Jurado Temblador
 Fecha: 06/10/2026
*/

// Modelo

// Definir constantes
define("G", 9.81); // gravedad en m/s^2

// Negociado
// Recoger los valores del formulario
$velocidad_inicial = (float) $_POST['velocidad_inicial'] ?? 0;
$angulo_lanzamiento = (float) $_POST['angulo_lanzamiento'] ?? 0;

// Convertimos el ángulo de grados a radianes
$angulo_radianes = deg2rad($angulo_lanzamiento);

// Calculamos la velocidad  inicial horizontal y verical
$velocidad_inicial_horizontal = $velocidad_inicial * cos($angulo_radianes);
$velocidad_inicial_vertical = $velocidad_inicial * sin($angulo_radianes);

// Calculamos la altura máxima
$altura_maxima = ($velocidad_inicial_vertical ** 2) / (2 * G);

// Calculamos el alcance máximo
$alcance_maximo = ($velocidad_inicial_horizontal * (2 * $velocidad_inicial_vertical)) / G;

// Tiempo total de vuelo
$tiempo_vuelo = (2 * $velocidad_inicial_vertical) / G;

// Vista
include 'views/calculos.view.php';
?>