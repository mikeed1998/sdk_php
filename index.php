<?php

    $identificador = (isset($_GET['identificador'])) ? $_GET['identificador'] : 0;
    $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'Proyecto';

    global $title;
    
    $title = 'Proyecto - ' . ucfirst($pagina);

    switch($identificador) 
    {
        case 2:
            include 'frontend/front/layout.php';
            include 'frontend/front/nosotros.php';
            break;
        case 3:
            include 'frontend/front/layout.php';
            include 'frontend/front/contacto.php';
            break;
        case 4:
            include 'frontend/front/layout.php';
            include 'frontend/front/tienda.php';
            break;
        case 5:
            $producto = 'pez';
            include 'frontend/front/layout.php';
            include 'frontend/front/producto.php';
            break;
        default:
            include 'frontend/front/layout.php';
            include 'frontend/front/home.php';
            break;
    };