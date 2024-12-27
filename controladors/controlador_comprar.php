<?php
    if (session_status() != PHP_SESSION_ACTIVE) // CAL FER SESSION_START JA QUE AQUEST CONTROLADOR ES CRIDA AMB AJAX, 
        session_start();                        // I NO RECORDA LA SESSION QUE S'INICIA A L'INDEX
    
    $idProducte = $_GET["idProducte"];
    $nomProducte = $_GET["nomProducte"];
    $quantitat = (int)$_GET["quantitat"];
    $preuUnitat = (float)$_GET["preuUnitat"];

    if (!isset($_SESSION["cart"]))
        $_SESSION["cart"] = [];

    if (isset($_SESSION['cart'][$nomProducte]))
    {
        $_SESSION['cart'][$nomProducte]["quantitat"] += $quantitat;
        $_SESSION['cart'][$nomProducte]["preuProducte"] += $preuUnitat * (float)$quantitat;
    }   

    else 
    {
        $_SESSION['cart'][$nomProducte]["idProducte"] = $idProducte;
        $_SESSION['cart'][$nomProducte]["quantitat"] = $quantitat;
        $_SESSION['cart'][$nomProducte]["preuProducte"] = $preuUnitat * (float)$quantitat;
    }
        
    include_once __DIR__ . '/../vistes/vista_comprar.php';
?>
