<?php
if (session_status() != PHP_SESSION_ACTIVE) // CAL FER SESSION_START JA QUE AQUEST CONTROLADOR ES CRIDA DES D'UN FORM, 
    session_start();                        // I NO RECORDA LA SESSION QUE S'INICIA A L'INDEX
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["cart"][$_POST["producte"]]) && is_numeric($_POST["quantitat"])) 
    {
        $preuUnitat = $_SESSION["cart"][$_POST["producte"]]["preuProducte"] / $_SESSION["cart"][$_POST["producte"]]["quantitat"];

        $_SESSION["cart"][$_POST["producte"]]["quantitat"] = $_POST["quantitat"];
        $_SESSION["cart"][$_POST["producte"]]["preuProducte"] = $_POST["quantitat"] * $preuUnitat;
    }

    header("Location: ../index.php?accio=veure_carrito");
    exit();
?>
