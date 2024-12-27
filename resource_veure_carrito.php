<html lang="ca">
    <head>
        <title>Veure carrito - Plantes Aromàtiques</title>
        <link rel="stylesheet" href="./public/css/fitxerStyle.css?v=2">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="./public/js/script.js"></script>
    </head>

    <body>

        <header>
            <?php require __DIR__.'/controladors/controlador_menu_superior.php'; ?>
        </header>

        <div id="container_veure_carrito">
            <?php require __DIR__.'/controladors/controlador_veure_carrito.php'; ?>
        </div>

        <footer>
            <?php require __DIR__.'/controladors/controlador_peu.php'; ?>
        </footer>


    </body>
</html>