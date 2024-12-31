<?php
    // LISTAT DE TIPUS D'ERRORS:
    // 1: NO HI HA ERROR. TOT CORRECTE
    // -2: LES DADES INTRODUÏDES NO SÓN CORRECTES
    // -3: ERROR DE LA BASE DE DADES / ERROR EXTRAORDINARI

    $actualitzarCorrecte = -3;

    if ($_SERVER["REQUEST_METHOD"]=="POST") // CONFIRMEM QUE S'HA ENVIAT EL FORMULARI
    {
        include __DIR__.'/../models/model_validar_dades_server_side.php'; // FUNCIÓ AUXILIAR

        include __DIR__.'/../models/model_connectaBD.php';
        include __DIR__.'/../models/model_actualitzar_perfil.php';

        $errors_actualitzar_perfil = ["name" => "", "email" => "", "password" => "", "address" => "", "population" => "", "postal" => ""];
        $actualitzarCorrecte = validar_dades_server_side($errors_actualitzar_perfil);

        if ($actualitzarCorrecte != 2 && isset($_FILES['profile_image']) && !empty($_FILES['profile_image']['name'])) 
        {
            $fileExtension = pathinfo($_FILES['profile_image']['name'], PATHINFO_EXTENSION);
            $safeFileName = $_SESSION["id"] . '.' . $fileExtension;
            $safeFileName = preg_replace('/[^a-zA-Z0-9._-]/', '', $safeFileName);
            $destinationPath = $filesAbsolutePath . $safeFileName;
        
            if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $destinationPath))
                $fileAbsolutePath = $destinationPath;
            else
                $actualitzarCorrecte = -2; // LA IMATGE PENJADA HA DONAT ERRORS
        }
        
        else // NO S'HA INTRODUÏT CAP IMATGE
        {
            if (isset($_SESSION["picture"]))
                $fileAbsolutePath = $_SESSION["picture"];
            else
                $fileAbsolutePath = "/images/usuario_default.webp"; // S'UTILITZA LA IMATGE PER DEFECTE
        }
            
        if ($actualitzarCorrecte!=-2) // SI LES DADES INTRODUÏDES SÓN CORRECTES
        {
            $conn = getConn();
            $actualitzarCorrecte = actualitzarPerfil($conn, $_SESSION["id"], $fileAbsolutePath);
        
            if ($actualitzarCorrecte==1)
            {
                $_SESSION["name"] = $_POST["name"];
                $_SESSION["email"] = $_POST["email"];
                $_SESSION["address"] = $_POST["address"];
                $_SESSION["population"] = $_POST["population"];
                $_SESSION["postal"] = $_POST["postal"];
                $_SESSION["picture"] = $fileAbsolutePath;
            }     
        }
    }

    include __DIR__.'/../vistes/vista_actualitzar_perfil.php';
?>