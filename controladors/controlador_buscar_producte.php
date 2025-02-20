<?php

    if (isset($_GET["producteABuscar"]))
    {
        $producteABuscar = $_GET["producteABuscar"];

        include_once __DIR__.'/../models/model_connectaBD.php';
        include_once __DIR__.'/../models/model_buscar_producte.php';

        $conn = getConn();
        $productes = getProductesByNom($conn, $producteABuscar);

        include_once __DIR__.'/../vistes/vista_buscar_producte.php';
    }

    else
    {
        header("Location: ../index.php");
        exit();
    }

?>