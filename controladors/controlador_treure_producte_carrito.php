<?php
    if (session_status() != PHP_SESSION_ACTIVE) // CAL FER SESSION_START JA QUE AQUEST CONTROLADOR ES CRIDA AMB AJAX, 
        session_start();                        // I NO RECORDA LA SESSION QUE S'INICIA A L'INDEX

    $nomProducte = $_GET["nomProducte"];

    if (isset($_SESSION["cart"]) && isset($nomProducte))
        if (array_key_exists($nomProducte, $_SESSION["cart"]))
            unset($_SESSION["cart"][$nomProducte]);
    
    if (isset($_SESSION["cart"]))
        $cart = $_SESSION["cart"];
    else
        $cart = [];

    include_once __DIR__.'/../vistes/vista_veure_carrito.php';
?>
