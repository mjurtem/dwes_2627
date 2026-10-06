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
            <i class="bi bi-calculator-fill"></i>
            <span class="fs-6">Proyecto 2.1 - Calculadora Básica</span>
        </header>

         <!-- contenido principal de la aplicacion -->
         <main>
            <div class="content">
                <!-- Tabla de resultados -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Valores iniciales:</th>
                            <th>Resultados:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Velocidad Inicial:</td>
                            <td><?= $velocidad_inicial ?></td>
                        </tr>
                        <tr>
                            <td>Ángulo inclinación</td>
                            <td><?= $velocidad_inicial_vertical ?></td>
                        </tr>
                        <tr>
                            <td>Altura Máxima</td>
                            <td><?= $altura_maxima ?></td>
                        </tr>
                        <tr>
                            <td>Alcance Máximo</td>
                            <td><?= $alcance_maximo ?></td>
                        </tr>
                        <tr>
                            <td>Tiempo de Vuelo</td>
                            <td><?= $tiempo_vuelo ?></td>
                        </tr>
                    </tbody>
                    <div class="btn-group" role="group">
                        <a class="btn btn-primary" href="index.php" role="button">Volver</a>
                    </div>
                </table>
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