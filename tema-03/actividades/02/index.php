<?php
    /*
        Actividad 32
        Descripcion: Formulario de registro con acceso según perfil de usuario

        Formulario de registro:
        - Nombre usuario
        - Email
        - Contraseña o password
        - Perfil de usuario (admin, edit, user)

        Tipos de perfiles y privilegios:
            - Admin: Añadir, Eliminar, actualizar y consultar
            - Edit: Añadir, actualizar y consultar
            - User: consultar
    */
    
    // Models

    // Negociado
    // Crear lista de perfiles
    $perfiles = ["admin", "edit", "user"];

    // Vista
    include "views/index.view.php";
?>