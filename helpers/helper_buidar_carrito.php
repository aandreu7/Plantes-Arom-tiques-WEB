<?php
    if (session_status() != PHP_SESSION_ACTIVE) // CAL FER SESSION_START JA QUE AQUEST CONTROLADOR ES CRIDA AMB AJAX, 
        session_start();                        // I NO RECORDA LA SESSION QUE S'INICIA A L'INDEX
        
    // AQUEST HELPER POT SER CRIDAT PER UN CONTROLADOR O UNA FUNCIÓ J
    if (isset($_SESSION["cart"]))
        unset($_SESSION["cart"]);
?>