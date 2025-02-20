<?php

    function getDetallProducte($conn, $producte_id): array
    {
        $sql = ("SELECT * FROM Producte WHERE producte_id=$producte_id");
        $stmt = pg_query($conn, $sql);
        $filas = pg_fetch_assoc($stmt);
        return $filas;
    }
    
?>