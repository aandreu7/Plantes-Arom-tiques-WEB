<?php
    if ($_GET["logued"] == "true") 
    {
        echo '<li><a href="index.php?accio=perfil">Veure perfil</a></li>';
        echo '<li><a href="index.php?accio=tancar_sessio">Tancar sessió</a></li>';
    } 
    else 
    {
        echo '<li><a href="index.php?accio=inici_sessio">Iniciar sessió</a></li>';
        echo '<li><a href="index.php?accio=registre">Registrar-se</a></li>';
    }
?>