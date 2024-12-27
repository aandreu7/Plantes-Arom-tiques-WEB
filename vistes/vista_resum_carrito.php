<section id="resumCarrito">
    <p>Resum de compra:</p>

    <span id="totalProductes">
        <?php 
            echo count($_SESSION["cart"]) . " productes"; 
        ?>
    </span>

    <span id="importTotal">
        <?php
            echo "€" . $preuTotal;
        ?>
    </span>

    <?php
        $ultimProducte = key(array_slice($_SESSION["cart"], -1, 1, true));

        echo '<span id="ultimProduct">Últim producte afegit: ' . $ultimProducte . '</span>';
    ?>
</section>