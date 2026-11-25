<?php
/*

*/

$conexion = mysqli_connect('localhost', 'root', '', 'dwes_tienda');
$resultado = mysqli_query($conexion, 'SELECT * FROM productos;');
var_dump($conexion);

?>