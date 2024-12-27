<?php

    function actualitzarPerfil($conn, $idUsuari, $picturePath): int // RETORNA -3 (ERROR BD) o 1 (TOT CORRECTE)
    {
        $sqlVerify = "UPDATE Usuari SET usuari_nom = $1, usuari_email = $2, usuari_contrasenya = $3,
                usuari_direccio = $4, usuari_poblacio = $5, usuari_cp = $6, usuari_foto = $7
                WHERE usuari_id = $8;";

        $params = array(
            htmlspecialchars($_POST["name"]),
            filter_var($_POST["email"], FILTER_SANITIZE_EMAIL),
            password_hash($_POST["password"], PASSWORD_DEFAULT),
            htmlspecialchars($_POST["address"]),
            htmlspecialchars($_POST["population"]),
            htmlspecialchars($_POST["postal"]),
            htmlspecialchars($picturePath),
            $idUsuari);

        $result = pg_query_params($conn, $sqlVerify, $params);

        if (!$result)
            return -3;
        
        return 1;
    }

?>