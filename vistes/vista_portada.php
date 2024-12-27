<?php
    echo "VAR DUMP DE vista_portada.php";
    var_dump($_SESSION);
    var_dump($_FILES);
?>
<body>
    <header id="header_portada">
        <h1>Benvingut al món de les plantes aromàtiques</h1>
    </header>

    <div id="grid_portada">
        <section id="mes_populars" style="grid-area: mes_populars">
            <h2>Plantes aromàtiques més populars</h2>
            <div class="plant">
                <img src="./images/albahaca.png" alt="Albahaca">
                <h3>Albahaca</h3>
                <p>Ideal pels teus plats i salses.</p>
            </div>
            <div class="plant">
                <img src="./images/julivert.png" alt="Julivert">
                <h3>Julivert</h3>
                <p>Un clàssic, fresc i deliciòs.</p>
            </div>
            <div class="plant">
                <img src="./images/camamilla.webp" alt="Camamilla">
                <h3>Camamilla</h3>
                <p>Utilitzada per les seves propietats antiinflamatòries i per alleujar problemes digestius.</p>
            </div>
        </section>

        <section id="quotes" style="grid-area: cites_famoses">
            <h2>Citas Famosas sobre Plantas</h2>
            <blockquote>
                <p>"Las flores son el canto de la tierra." - **Anónimo**</p>
            </blockquote>
            <blockquote>
                <p>"Las plantas son nuestros amigos y nos ayudan a vivir." - **Anónimo**</p>
            </blockquote>
            <blockquote>
                <p>"El jardín es una forma de viajar a la naturaleza." - **Anónimo**</p>
            </blockquote>
        </section>


        <section id="paypal" style="grid-area: paypal">
            <a href="https://www.paypal.com/es/home">
                <h2>Recolza el nostre proyecte</h2>
            </a>
        </section>

    </div>
</body>