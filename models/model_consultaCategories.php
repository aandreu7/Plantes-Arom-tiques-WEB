<?php

    function getCategories($conn): array
    {
        $sql = ("SELECT * FROM Categoria");
        $stmt = pg_query($conn, $sql);
        $filas = pg_fetch_all($stmt);
        return $filas;
    }
    
?>