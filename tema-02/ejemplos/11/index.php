<?php
$var = null;

// convertir a entero
$var2 = (int) $var;
echo "El valor: $var2 de tipo: " . gettype($var2);

// convertir a boolean
$var3 = (bool) $var;
echo "<br>El valor: $var3 de tipo: " . gettype($var3);

//convertir a cadena
$var4 = (string) $var;
echo "<br>El valor: $var4 de tipo: " . gettype($var4);

// convertir a flotante
$var5 = (float) $var;
echo "<br>El valor: $var5 de tipo: " . gettype($var5);
?>