<?php

    include __DIR__.'/../models/model_connectaBD.php';

    require_once __DIR__.'/../models/model_consultaCategories.php';

    $conn = getConn();

    $categories = getCategories($conn);

    include __DIR__.'/../vistes/vista_llistar_categories.php';

?>