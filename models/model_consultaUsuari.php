<?php

function comprovaUsuariExistentIIniciaSessio($conn, $email_usuari, $contrasenya, &$dadesUsuari): int // RETORNA -1 (EMAIL NO EXISTEIX), -2 (CONTRASENYA INCORRECTA), -3 (ERROR BD) o 1 (TOT CORRECTE)
{
    $sqlVerify = "SELECT * FROM Usuari WHERE usuari_email = $1;";

    $result = pg_query_params($conn, $sqlVerify, array($email_usuari));

    if ($result===false) // ERROR DE LA BASE DE DADES
        return -3;
    if (pg_num_rows($result) != 1) // L'EMAIL NO ESTÀ REGISTRAT O EXISTEIX MÉS D'UN USUARI AMB AQUEST EMAIL
        return -1;
    else
    {
        $row = pg_fetch_assoc($result);

        if (password_verify($contrasenya, $row["usuari_contrasenya"]))
        {
            $dadesUsuari["id"] = $row["usuari_id"];
            $dadesUsuari["name"] = $row["usuari_nom"];
            $dadesUsuari["address"] = $row["usuari_direccio"];
            $dadesUsuari["population"] = $row["usuari_poblacio"];
            $dadesUsuari["postal"] = $row["usuari_cp"];
            $dadesUsuari["picture"] = $row["usuari_foto"];
            return 1;
        }
        else
            return -2;
    }
    
}

function comprovaUsuariExistentIRegistra($conn, $email_usuari, &$idNouUsuari): int // RETORNA -1 (EMAIL JA REGISTRAT), -3 (ERROR BD) o 1 (TOT CORRECTE)
{
    $sqlVerify = "SELECT COUNT(usuari_id) FROM Usuari WHERE usuari_email = $1;";

    $result = pg_query_params($conn, $sqlVerify, array($email_usuari));

    $row = pg_fetch_result($result, 0, 0);

    if ($row > 0) // L'EMAIL JA ESTÀ REGISTRAT
        return -1;
    else 
    {
        $sqlInsert = "INSERT INTO Usuari (usuari_nom, usuari_email, usuari_contrasenya, 
            usuari_direccio, usuari_poblacio, usuari_cp) VALUES ($1, $2, $3, $4, $5, $6) RETURNING usuari_id";

        $params = array(
            htmlspecialchars($_POST["name"]),
            filter_var($_POST["email"], FILTER_SANITIZE_EMAIL),
            password_hash($_POST["password"], PASSWORD_DEFAULT),
            htmlspecialchars($_POST["address"]),
            htmlspecialchars($_POST["population"]),
            htmlspecialchars($_POST["postal"]));

        $result = pg_query_params($conn, $sqlInsert, $params);

        if ($result)
        {
            $row = pg_fetch_assoc($result); 
            $idNouUsuari = $row["usuari_id"];
            return 1; // USUARI REGISTRAT CORRECTAMENT
        }
        else
            return -3; // ERROR DE LA BASE DE DADES
    }
}

?>