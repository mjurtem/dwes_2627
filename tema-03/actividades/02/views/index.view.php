<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividad 32 - Formulario de Registro</title>

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
            <i class="bi bi-stack"></i>
            <span class="fs-6">Actividad 32 - Formulario de Registro</span>
        </header>

         <!-- contenido principal de la aplicacion -->
        <main>
            <div class="content">
              <h2>Formulario de registro</h2>
              <!-- Formulario de la calculadora -->
              <form action="acceso.php" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1">Nombre Usuario</label>
                  <input type="text" class="form-control" id="exampleInputName" name="nombre" placeholder="Enter name">
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                </div>

                <div class="mb-3">
                  <label for="exampleInputPerfil" class="form-label">Perfil de usuario</label>
                  <select name="perfil">
                    <option selected disabled>Seleciona un perfil</option>
                    <?php foreach ($perfiles as $perfil): ?>
                      <option value="<?= $perfil ?>"><?= ucfirst($perfil) ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
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