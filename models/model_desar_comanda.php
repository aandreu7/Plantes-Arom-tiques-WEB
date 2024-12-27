<?php

    function desarComanda($conn, $cart, $preuTotalComanda, $idUser) : int
    {
        // RETORNA:
        // 1 -> TOT CORRECTE
        // 0 -> ERROR

        // FUNCIONALITAT:
        // 1. INSEREIX UNA NOVA COMANDA
        // 2. INSEREIX UNA NOVA LÍNIA DE COMANDA PER CADA PRODUCTE DE LA COMANDA


        // PAS 1. INSEREIX UNA NOVA COMANDA

        $sqlVerify = "INSERT INTO comanda (comanda_numitems, comanda_costtotal, usuari_id)
                VALUES ($1, $2, $3) RETURNING comanda_id";

        $params = array(count($cart), $preuTotalComanda, $idUser);

        $result = pg_query_params($conn, $sqlVerify, $params);

        if ($result) 
        { 
            $row = pg_fetch_assoc($result); 
            $comanda_id = $row["comanda_id"];
        } 
        else
            return 0;

        // PAS 2. INSEREIX UNA NOVA LÍNIA DE COMANDA PER CADA PRODUCTE DE LA COMANDA

        foreach ($cart as $nomProducte => $producte)
        {
            $sqlVerify = "INSERT INTO linia_comanda (lc_nomproducte, lc_quantitat, lc_preuunitari, lc_preutotal, comanda_id, producte_id)
                    VALUES ($1, $2, $3, $4, $5, $6)";
    
            $params = array($nomProducte, $producte['quantitat'], $producte['preuProducte']/$producte['quantitat'], 
                    $producte['preuProducte'], $comanda_id, $producte["idProducte"]);

            $result = pg_query_params($conn, $sqlVerify, $params);

            if ($result === false)
                return 0;
        }

        return 1;
    }

?>