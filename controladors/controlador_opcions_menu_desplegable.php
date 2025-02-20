<?php

    if (session_status() != PHP_SESSION_ACTIVE) // CAL FER SESSION_START JA QUE AQUEST CONTROLADOR ES CRIDA AMB AJAX, 
        session_start();                        // I NO RECORDA LA SESSION QUE S'INICIA A L'INDEX

    include_once __DIR__.'/../vistes/vista_opcions_menu_desplegable.php';
    
?>

