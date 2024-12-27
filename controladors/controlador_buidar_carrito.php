<?php
    // AQUEST CONTROLADOR POT SER CRIDAT PER DOS CONTROLADORS DIFERENTS
    if (isset($_SESSION["cart"]))
        unset($_SESSION["cart"]);
?>