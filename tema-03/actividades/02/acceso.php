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
    
    // Obtener los detalles del formulario de registro
    $usuario = $_POST["usuario"] ?? "";
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";
    $perfil = $_POST["perfil"] ?? "";

    // Validacion de los datos del formulario

    // Vista
    include "views/acceso.view.php";
?>