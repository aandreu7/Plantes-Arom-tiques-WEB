<?php
    if (isset($_SESSION["cart"]))
        $cart = $_SESSION["cart"];
    else
        $cart = [];

    include_once __DIR__.'/../vistes/vista_veure_carrito.php';
?>
