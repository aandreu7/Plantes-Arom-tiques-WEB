<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["cart"][$_POST["producte"]]) && is_numeric($_POST["quantitat"])) 
    {
        $preuUnitat = $_SESSION["cart"][$_POST["producte"]]["preuProducte"] / $_SESSION["cart"][$_POST["producte"]]["quantitat"];

        $_SESSION["cart"][$_POST["producte"]]["quantitat"] = $_POST["quantitat"];
        $_SESSION["cart"][$_POST["producte"]]["preuProducte"] = $_POST["quantitat"] * $preuUnitat;
    }

?>
