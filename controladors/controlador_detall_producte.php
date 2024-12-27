<?php

    include __DIR__.'/../models/model_connectaBD.php';

    require_once __DIR__.'/../models/model_consultaDetallProducte.php';

    $conn = getConn();

    $idProducte = $_GET["producte_id"];

    $producte = getDetallProducte($conn, $idProducte);

    include __DIR__.'/../vistes/vista_detall_producte.php';

?>