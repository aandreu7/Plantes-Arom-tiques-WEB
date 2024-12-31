<?php
    if (session_status() != PHP_SESSION_ACTIVE) // CAL FER SESSION_START JA QUE AQUEST CONTROLADOR ES CRIDA AMB AJAX, 
        session_start();                        // I NO RECORDA LA SESSION QUE S'INICIA A L'INDEX

    if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"]))
    {
        $cart = $_SESSION["cart"];

        // CALCULEM EL PREU TOTAL DE LA COMANDA
        $quantitats = array_column($cart, "preuProducte");
        $total = array_sum($quantitats);

        include_once __DIR__.'/../models/model_connectaBD.php';
        include_once __DIR__.'/../models/model_desar_comanda.php';

        $conn = getConn();

        $resultat = desarComanda($conn, $cart, $total, $_SESSION["id"]);

        if ($resultat)
        {
            include_once __DIR__.'/../models/model_buidar_carrito.php';
            echo 1; // HO REB EL JS
        }
    }
?>