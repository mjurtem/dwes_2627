<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen práctico 03</title>

    <!-- css bootstrap 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- iconos bootstrap 1.13.1 -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  </head>
  <body>
    <!-- capa principal de la aplicacion -->
    <div class="container mt-3">
        <!-- cabecera  de la aplicacion -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-speedometer2"></i>
            <span class="fs-6">Examen práctico 03 - Movimiento rectilíneo uniformemente acelerado</span>
        </header>

         <!-- contenido principal de la aplicacion -->
         <main>
            <div class="content">
                <table class="table">
                    <tr>
                        <th colspan="3">Datos introducidos:</th>
                    </tr>

                    <tr>
                        <td>Velocidad inicial:</td>
                        <td><?= number_format($velocidad_inicial, 2, ",", "."); ?></td>
                        <td>m/s</td>
                    </tr>

                    <tr>
                        <td>Aceleracion:</td>
                        <td><?= number_format($aceleracion, 2, ",", "."); ?></td>
                        <td>m/s2</td>
                    </tr>

                    <tr>
                        <td>Tiempo:</td>
                        <td><?= number_format($tiempo, 2, ",", "."); ?></td>
                        <td>s</td>
                    </tr>

                    <tr>
                        <td>Masa:</td>
                        <td><?= number_format($masa, 2, ",", "."); ?></td>
                        <td>kg</td>
                    </tr>

                    <tr>
                        <th colspan="3">Resultados:</th>
                    </tr>

                    <tr>
                        <td>Velocidad final:</td>
                        <td><?= number_format($velocidad_final, 2, ",", "."); ?></td>
                        <td>m/s</td>
                    </tr>

                    <tr>
                        <td>Espacio recorrido:</td>
                        <td><?= number_format($espacio_recorrido, 2, ",", "."); ?></td>
                        <td>m</td>
                    </tr>

                    <tr>
                        <td>Fuerza neta:</td>
                        <td><?= number_format($fuerza_neta, 2, ",", "."); ?></td>
                        <td>N</td>
                    </tr>

                    <tr>
                        <td>Energía cinética final:</td>
                        <td><?= number_format($energia_cinetica_final, 2, ",", "."); ?></td>
                        <td>J</td>
                    </tr>
                </table>
                <form><button class="btn btn-primary" formaction="index.php">Volver</button></form>
            </div>
         </main>

        <!-- pie de pagina de la aplicacion -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026 Miguel A. Jurado Temblador - 
                    DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap basico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </div>
  </body>
</html>