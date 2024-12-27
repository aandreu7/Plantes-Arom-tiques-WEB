<?php
    ?> <script> var isLoguedIn = <?php echo isset($_SESSION["logued"]) && $_SESSION["logued"] == 1 ? "true" : "false"; ?> </script> <?php

    include __DIR__.'/../vistes/vista_menu_superior.php';
?>