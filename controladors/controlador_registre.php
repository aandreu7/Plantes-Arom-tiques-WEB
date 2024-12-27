<?php

    // LISTAT DE TIPUS D'ERRORS:
    // 1: NO HI HA ERROR. TOT CORRECTE
    // -1: L'EMAIL JA ESTÀ REGISTRAT
    // -2: LES DADES INTRODUÏDES NO SÓN CORRECTES
    // -3: ERROR DE LA BASE DE DADES / ERROR EXTRAORDINARI


    if ($_SERVER["REQUEST_METHOD"]!="POST" || empty($_POST["email"])) // ENCARA NO S'HA ENVIAT EL FORMULARI
    {
        include __DIR__.'/../vistes/vista_registre.php';
    }

    else // JA S'HA ENVIAT EL FORMULARI
    {
        include __DIR__.'/../helpers/helper_validar_dades_server_side.php'; // FUNCIÓ AUXILIAR

        include __DIR__.'/../models/model_connectaBD.php';
        include __DIR__.'/../models/model_consultaUsuari.php';

        $errors_registre = ["name" => "", "email" => "", "password" => "", "address" => "", "population" => "", "postal" => ""];
        $registreCorrecte = validar_dades_server_side($errors_registre);

        if ($registreCorrecte!=-2) // LES DADES INTRODUÏDES SÓN CORRECTES
        {
            $conn = getConn();
            $idNouUsuari = -1;
            $registreCorrecte = comprovaUsuariExistentIRegistra($conn, $_POST["email"], $idNouUsuari);
        
            if ($registreCorrecte==1)
            {
                $_SESSION["logued"] = true;
                $_SESSION["id"] = $idNouUsuari;
                $_SESSION["name"] = $_POST["name"];
                $_SESSION["email"] = $_POST["email"];
                $_SESSION["address"] = $_POST["address"];
                $_SESSION["population"] = $_POST["population"];
                $_SESSION["postal"] = $_POST["postal"];
                $_SESSION["picture"] = "/images/usuario_default.webp"; // NO ES POT INSERIR UNA IMATGE DURANT EL REGISTRE, PER TANT, AFEGIM LA DE PER DEFECTE

                header("Location: ../index.php");
                exit();
            }     
        }

        include __DIR__.'/../vistes/vista_registre_output.php';
    }
?>