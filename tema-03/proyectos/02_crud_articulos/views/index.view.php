<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 3.2 Proyecto CRUD Tabla Artículos</title>

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
            <span class="fs-6">Proyecto 3.2 Proyecto CRUD Tabla Artículos</span>
        </header>

        <nav class="navbar md:navbar-expand bg-1">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                    <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon" aria-hidden="true"></span>
                    </button>
                <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
                <div class="drawer-header">
                    <h5 class="drawer-title" id="navbarDrawerLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
                </div>
                <div class="drawer-body mb-2 md:mb-0">
                    <ul class="nav navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Listado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="new.php">Nuevo</a>
                    </li>
                    </ul>
                    <form class="hstack gap-2" role="search">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="btn-solid btn-icon theme-secondary" type="submit">
                        <svg class="bi" width="16" height="16"><use href="#search" /></svg>
                    </button>
                    </form>
                </div>
                </dialog>
            </div>
        </nav>

        <!-- contenido principal de la aplicacion -->
         <main>
            <div class="content">
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Descripción</th>
                        <th>Modelo</th>
                        <th>Categoria</th>
                        <th>Unidades</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                    <?php foreach ($articulos as  $indice => $articulo): ?>
                        <tr>
                            <th><?= $articulo['id'] ?></th>
                            <td><?= $articulo['descripcion'] ?></td>
                            <td><?= $articulo['modelo'] ?></td>
                            <td><?= implode(',', $articulo['categoria']) ?></td>
                            <td><?= $articulo['unidades'] ?></td>
                            <td><?= number_format($articulo['precio'], 2,',' ,'.') ?></td>
                            <td>
                                <a href="delete.php?indice=<?= $indice ?>" class="bi bi-trash"></a>
                                <a href="edit.php?indice=<?= $indice ?>" class="bi bi-pencil"></a>
                                <a href="show.php?indice=<?= $indice ?>" class="bi bi-eye"></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
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

        <!-- js bootstrap basico 6.0 -->
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    </div>
  </body>
</html>