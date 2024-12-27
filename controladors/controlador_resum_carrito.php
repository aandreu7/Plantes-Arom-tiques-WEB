<?php
    if (session_status() != PHP_SESSION_ACTIVE) // CAL FER SESSION_START JA QUE AQUEST CONTROLADOR ES CRIDA AMB AJAX, 
        session_start();                        // I NO RECORDA LA SESSION QUE S'INICIA A L'INDEX

    if (isset($_SESSION["cart"]) && count($_SESSION["cart"]) > 0)
        {
            $mostrarResumCarrito = true;
            $preuTotal = 0;
            foreach ($_SESSION["cart"] as $producte)
                $preuTotal += $producte["preuProducte"];
            $numProductesCarrito = count($_SESSION["cart"]);
        }
        else
            $mostrarResumCarrito = false;

    if ($mostrarResumCarrito)
        include_once __DIR__.'/../vistes/vista_resum_carrito.php';
?>