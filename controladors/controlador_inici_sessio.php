<?php
    // LLISTAT ERRORS
    //  1 (NO HI HA ERROR. TOT CORRECTE)
    // -1 (EMAIL NO EXISTEIX)
    // -2 (CONTRASENYA INCORRECTA)
    // -3 (ERROR BD I/O ERROR EXTRAORDINARI)


    if ($_SERVER["REQUEST_METHOD"]!="POST" || empty($_POST["email"])) // ENCARA NO S'HA ENVIAT EL FORMULARI
    {
        include __DIR__.'/../vistes/vista_inici_sessio.php';
    }

    else // JA S'HA ENVIAT EL FORMULARI
    {
        include __DIR__.'/../models/model_connectaBD.php';
        include __DIR__.'/../models/model_consultaUsuari.php';

        $conn = getConn();

        $dadesUsuari = array(
            "id" => -1,
            "name" => "",
            "address" => "",
            "population" => "",
            "postal" => "",
            "picture" => "/images/usuario_default.webp"
        );

        $iniciSessioCorrecte = comprovaUsuariExistentIIniciaSessio($conn, $_POST["email"], $_POST["password"], $dadesUsuari);

        if ($iniciSessioCorrecte==1)
        {
            $_SESSION["logued"] = true;
            $_SESSION["id"] = $dadesUsuari["id"];
            $_SESSION["name"] = $dadesUsuari["name"];
            $_SESSION["address"] = $dadesUsuari["address"];
            $_SESSION["population"] = $dadesUsuari["population"];
            $_SESSION["postal"] = $dadesUsuari["postal"];
            $_SESSION["picture"] = $dadesUsuari["picture"];
            $_SESSION["email"] = $_POST["email"];
            header("Location: ../index.php");
            exit();
        }
            
        include __DIR__.'/../vistes/vista_inici_sessio_output.php';
    }

?>