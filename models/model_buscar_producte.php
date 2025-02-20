<?php

    function getProductesByNom($conn, $producteABuscar)
    {
        $sqlVerify = "SELECT * FROM producte WHERE producte_nom LIKE $1";

        $result = pg_query_params($conn, $sqlVerify, array('%' . $producteABuscar . '%'));

        $productes = array();

        if ($result && pg_num_rows($result))
            $productes = pg_fetch_all($result);

        return $productes;
    }

?>