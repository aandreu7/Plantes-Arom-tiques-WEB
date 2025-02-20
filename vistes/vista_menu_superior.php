<div id="header_section">
    <div id="contenidor_imatge_moviment">
        <img src="../images/planta_logo.png" width="70px">
    </div>
    <p>Ets a Plantes Aromàtiques</p>
    <?php if (isset($_SESSION["logued"]) && $_SESSION["logued"] == true): ?>
        <p> Benvingut, usuari <?php if (isset($_SESSION["name"])): echo $_SESSION["name"]; endif; ?> </p>
    <?php endif; ?>
    <section id="menu_superior">
        <ul>
            <li>
                <a href="index.php">Portada</a>
            </li>
            <li>
                <a href="index.php?accio=categories">Categories</a>
            </li>
            <li>
                <div id="menuDesplegable">
                    <img 
                        id="menuDesplegableIcon"
                        src=
                        "<?php
                            if (isset($_SESSION) && $_SESSION["logued"]) 
                                echo $_SESSION["picture"];
                            else 
                                echo '/../images/usuario_default.webp';
                        ?>"
                        alt="Usuari" 
                        width="50"
                    />
                    <section id="opcionsMenuDesplegable">
                        <!-- S'INTRODUEIX HTML DINÀMICAMENT QUAN ES FA CLICK A LA IMATGE -->
                    </section>
                </div>
            </li>
            <li>
                <a href="index.php?accio=veure_carrito">
                    <img src="./../images/carrito.png" alt="Anar a veure el carrito" width = "40">
                </a>
            </li>
            <li>
                <form id="buscador" action="../index.php" method="GET">
                    <input type="hidden" name="accio" value="buscar_producte">
                    <input 
                        type="text" 
                        name="producteABuscar" 
                        placeholder="Buscar producte..." 
                        required
                    >
                    <button type="submit">Buscar</button>
                </form>
            </li>
        </ul>
    </section>
</div>