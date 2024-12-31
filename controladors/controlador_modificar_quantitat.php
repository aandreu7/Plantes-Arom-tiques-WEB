<?php

    if (session_status() != PHP_SESSION_ACTIVE) // CAL FER SESSION_START JA QUE AQUEST CONTROLADOR ES CRIDA DES D'UN FORM, 
        session_start();                        // I NO RECORDA LA SESSION QUE S'INICIA A L'INDEX

    include_once __DIR__.'/../models/model_modificar_quantitat.php';

    header("Location: ../index.php?accio=veure_carrito");
    exit();

?>