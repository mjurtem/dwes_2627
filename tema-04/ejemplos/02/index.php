<?php

require_once 'class/Cliente.php';

// Crear un objeto de la clase Cliente
$c1 = new Cliente();

var_dump($c1);

$c1 -> setNombre('Ladrillos Margari');
$c1 -> setPoblacion('Ubrique');
$c1 -> setDni('12345678Q');

var_dump($c1);

echo '<br>';
echo $c1 -> getNombre();
echo '<br>';
echo $c1 -> getPoblacion();
echo '<br>';
echo $c1 -> getDni();
echo '<br>';

?>