<?php  

    /*
    Actividad: 2.1.1
    Descripcion: uso variables
        - un titulo
        - un parrafo
        - un enlace
    Alumno: Miguel A. Jurado Temblador
    Fecha: 30/09/2026
    */

    // Modelo
    // include 'model.index.php';

    // Negociado de la aplicacion - php

    $titulo = "El País";
    $parrafo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    $enlace = "https://www.elpais.es";

    // Vista de la aplicacion - html
    include 'view.index.php';
    ?>