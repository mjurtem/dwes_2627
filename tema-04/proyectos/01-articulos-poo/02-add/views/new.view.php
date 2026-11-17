<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 4.1 - CRUD Artículos - POO Encapsulación</title>

    <!-- css bootstrap 6.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    

    <!-- iconos bootstrap 1.13.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
  </head>
  <body>
    <!-- capa principal de la aplicacion -->
    <div class="container mt-3">
        <!-- cabecera  de la aplicacion -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Proyecto 4.1 - CRUD Artículos - POO Encapsulación</span>
        </header>


        <!-- contenido principal de la aplicacion -->
         <main>
            <div class="content">

                <legend>Formulario Nuevo Artículo</legend>

                <form action="create.php" method="post">

                    <!-- Descripción -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                    </div>

                    <!-- Modelo -->
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" required>
                    </div>

                    <!-- Marca: select generado con el array de marcas (value = índice) -->
                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca</label>
                        <select class="form-select" id="marca" name="marca" required>
                            <option value="">Selecciona una marca</option>
                            <?php foreach ($marcas as $indice => $nombre): ?>
                                <option value="<?= $indice ?>">
                                    <?= htmlspecialchars($nombre) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Categorías: checkboxes generados con el array de categorías (value = índice) -->
                    <div class="mb-3">
                        <span class="form-label d-block">Categorías</span>
                        <?php foreach ($categorias as $indice => $nombre): ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="categorias[]"
                                    id="categoria-<?= $indice ?>" value="<?= $indice ?>">
                                <label class="form-check-label" for="categoria-<?= $indice ?>">
                                    <?= htmlspecialchars($nombre) ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Unidades -->
                    <div class="mb-3">
                        <label for="unidades" class="form-label">Unidades</label>
                        <input type="number" class="form-control" id="unidades" name="unidades"
                            min="0" step="1" required>
                    </div>

                    <!-- Precio -->
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio (€)</label>
                        <input type="number" class="form-control" id="precio" name="precio"
                            min="0" step="0.01" required>
                    </div>

                    <a class="btn-solid theme-danger" href="index.php">Cancelar</a>
                    <button type="reset" class="btn-solid theme-warning">Borrar</button>
                    <button type="submit" class="btn-solid theme-primary">Crear Artículo</button>
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

        <!-- js bootstrap basico 6.0 -->
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    </div>
  </body>
</html>