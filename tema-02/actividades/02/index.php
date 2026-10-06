<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php
        // Ejercicio 1. Conversiones de datos en expresiones.
        $var1 = 10;
        $var2 = "2Hola";
        $var3 = 3.5;
        $var4 = "Hola";
        $var5 = true;

        $resultado1 = $var1 * $var2;
        $resultado2 = $var1 + $var2;
        $resultado3 = $var1 + $var3;
        $resultado4 = $var1 . $var4;
        $resultado5 = $var1 + $var5;

        echo "El caso 1 es de tipo: " . gettype($resultado1) . " y su valor es: $resultado1<br>";
        echo "El caso 2 es de tipo: " . gettype($resultado2) . " y su valor es: $resultado2<br>";
        echo "El caso 3 es de tipo: " . gettype($resultado3) . " y su valor es: $resultado3<br>";
        echo "El caso 4 es de tipo: " . gettype($resultado4) . " y su valor es: $resultado4<br>";
        echo "El caso 5 es de tipo: " . gettype($resultado5) . " y su valor es: $resultado5<br>";
    ?>
</body>
</html>