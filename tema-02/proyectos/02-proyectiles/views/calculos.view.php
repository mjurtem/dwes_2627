<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 2.1 - Calculadora Básica</title>

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
            <i class="bi bi-rocket-takeoff"></i>
            <span class="fs-6">Proyecto 2.2 - Cálculo Lanzamiento de Proyectiles</span>
        </header>

         <!-- contenido principal de la aplicacion -->
         <main>
            <div class="content">
                <!-- Tabla de resultados -->
                <table class="table">
                    <tbody>
                        <tr>
                            <th colspan="2">Valores iniciales:</th>
                        </tr>
                        <tr>
                            <td>Velocidad Inicial:</td>
                            <td><?= number_format($velocidad_inicial, 2, ",", ".") ?> m/s</td>
                        </tr>
                        <tr>
                            <td>Ángulo inclinación:</td>
                            <td><?= number_format($angulo_lanzamiento, 2, ",", ".") ?> °</td>
                        </tr>
                        <tr>
                            <th colspan="2">Resultados:</th>
                        </tr>
                        <tr>
                            <td>Ángulo Radianes:</td>
                            <td><?= number_format($angulo_radianes, 6, ",", ".") ?> Radianes</td>
                        </tr>
                        <tr>
                            <td>Velocidad Inicial X:</td>
                            <td><?= number_format($velocidad_inicial_x, 2, ",", ".") ?> m/s</td>
                        </tr>
                        <tr>
                            <td>Velocidad Inicial Y:</td>
                            <td><?= number_format($velocidad_inicial_y, 2, ",", ".") ?> m/s</td>
                        </tr>
                        <tr>
                            <td>Alcance Máximo del Proyectil:</td>
                            <td><?= number_format($alcance_maximo, 2, ",", ".") ?> m</td>
                        </tr>
                        <tr>
                            <td>Tiempo de Vuelo del Proyectil:</td>
                            <td><?= number_format($tiempo_vuelo, 2, ",", ".") ?> s</td>
                        </tr>
                        <tr>
                            <td>Altura Máxima del Proyectil:</td>
                            <td><?= number_format($altura_maxima, 2, ",", ".") ?> m</td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-group" role="group">
                    <a class="btn btn-primary" href="index.php" role="button">Volver</a>
                </div>
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