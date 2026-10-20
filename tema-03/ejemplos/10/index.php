<!-- css bootstrap 6.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">


<?php


require_once 'libs/crearetiquetas.php';

// Imprime un titulo de nivel 2 con las clases CSS tit-nav y text-center
$array['contenido'] = 'Titulo nivel 2';
$array['etiqueta'] = 'h2';
$array['clase'] = 'tit-nav text-center';
eti_html($array);

$array['contenido'] = '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."';
$array['etiqueta'] = 'p';
$array['clase'] = 'text-center';
eti_html($array);
?>