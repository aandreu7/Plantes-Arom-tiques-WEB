<ul>
    <?php foreach ($productes as $producte): ?>
        <li>
            <h3><?php echo $producte['producte_nom'] ?></h3>
            <p><?php echo $producte['producte_descripcio'] ?></p>
            <img 
                onClick="getDetallProducte(<?php echo htmlspecialchars($producte['producte_id']); ?>)"
                src="<?php echo htmlspecialchars($producte['producte_imatge']); ?>" 
                alt="<?php echo $producte['producte_nom']; ?>" 
                width="100"
            />
        </li>
    <?php endforeach; ?>
</ul>