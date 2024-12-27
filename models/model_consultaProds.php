<?php

    function getProductes($conn, $categoria_id): array
    {
        $sql = ("SELECT * FROM Producte WHERE categoria_id=$categoria_id");
        $stmt = pg_query($conn, $sql);
        $filas = pg_fetch_all($stmt);
        /*var_dump($filas);*/
        return $filas;
    }
?>