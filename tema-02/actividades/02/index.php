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
    <hr>
    <h1>Ejercicio 2</h1>
    <?php
        // Ejercicio 2. is_null().
        $var6;
        $var7 = "Hola";
        echo "<p>Casos que devuelven true:</p>";
        var_dump(is_null($var));
        var_dump(is_null($var6));
        unset($var7);
        var_dump(is_null($var7));

        $var8 = "";
        $var9 = 0;
        $var10 = false;
        echo "<p>Casos que devuelven false:</p>";
        var_dump(is_null($var8));
        echo "<br>";
        var_dump(is_null($var9));
        echo "<br>";
        var_dump(is_null($var10));
    ?>

    <hr>
    <h1>Ejercicio 3</h1>
    <?php
        // Ejercicio 3. isset().
        $var11 = "";
        $var12 = 0;
        $var13 = false;
        echo "<p>Casos que devuelven true:</p>";
        var_dump(isset($var11));
        echo "<br>";
        var_dump(isset($var12));
        echo "<br>";
        var_dump(isset($var13));

        $var14;
        $var15 = null;
        echo "<p>Casos que devuelven false:</p>";
        var_dump(isset($var14));
        echo "<br>";
        var_dump(isset($var15));
        echo "<br>";
        var_dump(isset($var));
    ?>

    <hr>
    <h1>Ejercicio 4</h1>
    <?php
        // Ejercicio 4. empty().
        
        $var16 = "";
        $var17 = 0;
        $var18 = false;
        echo "<p>Casos que devuelven true:</p>";
        var_dump(empty($var16));
        echo "<br>";
        var_dump(empty($var17));
        echo "<br>";
        var_dump(empty($var18));

        $var19 = "Hola";
        $var20 = 1;
        $var21 = true;
        echo "<p>Casos que devuelven false:</p>";
        var_dump(empty($var19));
        echo "<br>";
        var_dump(empty($var20));
        echo "<br>";
        var_dump(empty($var21));
    ?>
</body>
</html>