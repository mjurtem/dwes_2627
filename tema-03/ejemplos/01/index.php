<?php
// Variables de partida
$a = 10;
$b = "10";
$c = 5;
$d = "Hola Pepe";
$e = "Hola Luis";
$f = "hola";

// Comprobamos las expresiones
var_dump($a == $b); // true: son iguales
var_dump($a === $b); // false: iguales pero de distinto tipo
var_dump($a !== $b); // true: $a es de distinto tipo que $b
var_dump($a != $b); // false: son iguales
var_dump($b > $c); // true: $b es mayor que $c
var_dump($a != $c); // true: $a es distinto de $c
var_dump($a <> $c); // true: igual que la anterior
var_dump($d == $e); // false: no son cadenas identicas

var_dump($d[0] == $e[0]); // true: su primer carater es identico
var_dump($d[0] == $f[0]); // false: distingue mayusculas y minusculas
?>