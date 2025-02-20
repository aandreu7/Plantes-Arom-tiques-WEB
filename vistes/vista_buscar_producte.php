<section id="buscar_productes">
    <?php
        if (isset($productes) && count($productes) > 0) {
            echo '<ul>';
            foreach ($productes as $producte):
                echo '<li>';
                echo '<h3>' . htmlspecialchars($producte['producte_nom']) . '</h3>';
                echo '<p>' . htmlspecialchars($producte['producte_descripcio']) . '</p>';
                echo '<img 
                    onClick="getDetallProducte(' . htmlspecialchars($producte['producte_id']) . ', true)" 
                    src="' . htmlspecialchars($producte['producte_imatge']) . '" 
                    alt="' . htmlspecialchars($producte['producte_nom']) . '" 
                    width="100" />';
                echo '</li>';
            endforeach;
            echo '</ul>';
        } 
        else 
        { ?>
            <p id="missatgeCapProducte" class="warning">
                No hem trobat cap producte que coincideixi amb la teva cerca. Revisa que el nom comenci per majúscula! <br />
                O fes click <a href="index.php?accio=categories">aquí</a> per veure el catàleg.
            </p>
        <?php 
        } ?>
</section>
