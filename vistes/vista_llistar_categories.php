<div id="llistat_categories_canvia_productes">
    <ul>
        <?php foreach ($categories as $categoria): ?>
            <li>
                <h3><?php echo htmlentities($categoria['categoria_nom'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></h3>
                <p><?php echo htmlspecialchars($categoria['categoria_descripcio']) ?></p>
                <img 
                    onClick="getProductes(<?php echo htmlspecialchars($categoria['categoria_id']); ?>)"
                    src="<?php echo htmlspecialchars($categoria['categoria_imatge']); ?>" 
                    alt="<?php echo htmlspecialchars($categoria['categoria_nom']); ?>" 
                    width="100"
                />
            </li>
        <?php endforeach; ?>
    </ul>
</div>