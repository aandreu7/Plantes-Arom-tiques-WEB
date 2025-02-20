<?php
    $resultat = (int)$_GET["resultat"] ?? 0;
?>

<html lang="ca">
    <head>
        <title>Confirmació de compra - Plantes Aromàtiques</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./public/css/fitxerStyle.css?v=2">
        <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="./public/js/script.js"></script>
    </head>

    <body>

        <header>
            <?php require __DIR__.'/controladors/controlador_menu_superior.php'; ?>
        </header>

        <div id="container_confirmacio_compra">
            <?php require __DIR__.'/controladors/controlador_confirmacio_compra.php'; ?>
        </div>

        <footer>
            <?php require __DIR__.'/controladors/controlador_peu.php'; ?>
        </footer>


    </body>
</html>