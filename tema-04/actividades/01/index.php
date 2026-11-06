<?php

require_once __DIR__ . '/class/Alumno.php';

$a1 = new Alumno();
$a2 = new Alumno(1, 'Paco', 'Cano', 'Albacete', 'correo@gmail.com', 123456789, '2º DAW');

echo $a2 -> getId();
echo '<br>';
echo $a2 -> getNombre();
echo '<br>';
echo $a2 -> getApellidos();
echo '<br>';
echo $a2 -> getPoblacion();
echo '<br>';
echo $a2 -> getEmail();
echo '<br>';
echo $a2 -> getTelefono();
echo '<br>';
echo $a2 -> getCurso();
echo '<br><br>';

$a1 -> setId(2);
$a1 -> setNombre('Maria');
$a1 -> setApellidos('Parra');
$a1 -> setPoblacion('Jerez');
$a1 -> setEmail('email@hotmail.com');
$a1 -> setTelefono(987654321);
$a1 -> setCurso('1º SMR');

echo $a1 -> getId();
echo '<br>';
echo $a1 -> getNombre();
echo '<br>';
echo $a1 -> getApellidos();
echo '<br>';
echo $a1 -> getPoblacion();
echo '<br>';
echo $a1 -> getEmail();
echo '<br>';
echo $a1 -> getTelefono();
echo '<br>';
echo $a1 -> getCurso();
echo '<br>';

?>