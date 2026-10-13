<?php
// Modelo 



$velocidad_inicial = (float) $_POST['velocidad_inicial'];
$aceleracion = (float) $_POST['aceleracion'];
$tiempo = (float) $_POST['tiempo'];
$masa = (float) $_POST['masa'];

$velocidad_final = $velocidad_inicial + $aceleracion * $tiempo;
$espacio_recorrido = $velocidad_inicial * $tiempo + 0.5 * $aceleracion * pow($tiempo, 2);
$fuerza_neta = $masa * $aceleracion;
$energia_cinetica_final = 0.5 * $masa * pow($velocidad_final, 2);

// Vista
include 'views/calcular.view.php'
?>