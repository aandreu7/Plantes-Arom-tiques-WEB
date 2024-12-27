<?php

    // ÉS CORRECTE INICIAR LA SESSIÓ AIXÍ?
    session_start();

    if (!isset($_SESSION["logued"]))
        $_SESSION["logued"] = false;

    $accio = $_GET['accio'] ?? NULL;

    if (!isset($filesAbsolutePath))
        $filesAbsolutePath = 'uploadedUserFiles/';

    switch ($accio)
    {
        case "categories":
            require __DIR__.'/resource_llistar_categories.php';
            break;
        case "inici_sessio":
            require __DIR__.'/resource_inici_sessio.php';
            break;
        case "registre":
            require __DIR__.'/resource_registre.php';
            break;
        case "perfil":
            require __DIR__.'/resource_perfil.php';
            break;
        case "tancar_sessio":
            require __DIR__.'/resource_tancar_sessio.php';
            break;
        case "veure_carrito":
            require __DIR__.'/resource_veure_carrito.php';
            break;
        case "confirmacio_compra":
            require __DIR__.'/resource_confirmacio_compra.php';
            break;
        case "actualitzar_perfil":
            require __DIR__.'/resource_actualitzar_perfil.php';
            break;
        case "llistar_comandes":
            require __DIR__.'/resource_llistar_comandes.php';
            break;
        default:
            require __DIR__.'/resource_portada.php';
            break;
    }
?>