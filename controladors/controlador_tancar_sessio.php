<?php

    // ÉS CORRECTE UTILITZAR UN CONTROLADOR PER TANCAR LA SESSIÓ?
    // NO ES DESTRUEIX LA SESSIÓ, JA QUE PERDRÍEM EL CARRITO

    if (isset($_SESSION["logued"]))
        unset($_SESSION["logued"]);
    if (isset($_SESSION["id"]))
        unset($_SESSION["id"]);
    if (isset($_SESSION["name"]))
        unset($_SESSION["name"]);
    if (isset($_SESSION["email"]))
        unset($_SESSION["email"]);
    if (isset($_SESSION["address"]))
        unset($_SESSION["address"]);
    if (isset($_SESSION["population"]))
        unset($_SESSION["population"]);
    if (isset($_SESSION["postal"]))
        unset($_SESSION["postal"]);
    if (isset($_SESSION["picture"]));
        unset($_SESSION["picture"]);

    header("Location: ../index.php");
    exit();
?>
