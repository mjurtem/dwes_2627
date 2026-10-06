<?php
/*
 controlador: potencia.php

 Proyeto: proyecto 2.1 - calculadora básica
 Descripcion: Calculadora de operaciones basicas:
    - suma
    - resta
    - multiplicacion
    - division
    - potencia
    - ...
 Alumno: Miguel A. Jurado Temblador
 Fecha: 6/10/2026
*/

// Modelo

// Negociado
// Recoger los valores del formulario
$valor1 = (float) $_POST['valor1'];
$valor2 = (float) $_POST['valor2'];

// Realizar la operacion de potencia
$resultado = pow($valor1, $valor2);

$operacion = "Potencia";

// Vista
include 'views/resultado.view.php';
?>