<?php

    include __DIR__.'/../models/model_connectaBD.php';

    require_once __DIR__.'/../models/model_consultaProds.php';

    $conn = getConn();

    $productes = getProductes($conn, $_GET["categoria_id"]);

    include __DIR__.'/../vistes/vista_llistar_productes.php';

?>