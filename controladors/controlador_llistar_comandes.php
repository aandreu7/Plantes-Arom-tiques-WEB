<?php

    include __DIR__.'/../models/model_connectaBD.php';

    require_once __DIR__.'/../models/model_consultaComandes.php';

    $comandes = array();

    if (isset($_SESSION) && $_SESSION["logued"])
    {
        $conn = getConn();
        $comandes = getComandes($conn, $_SESSION["id"]);
    }

    include __DIR__.'/../vistes/vista_llistar_comandes.php';

?>