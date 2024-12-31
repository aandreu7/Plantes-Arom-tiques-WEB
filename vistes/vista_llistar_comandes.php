<section id="llistat_comandes">
    <h1>Llistat de Comandes</h1>
    <h3> T'arribaran a casa com a màxim 7 dies després de la compra! </h3>
    <?php if (!empty($comandes)): ?>
        <?php foreach ($comandes as $comandaId => $linies): ?>
            <?php 
                $comandaData = htmlspecialchars($linies[0]['comanda_data']);
                $comandaCostTotal = htmlspecialchars($linies[0]['comanda_costtotal']);
            ?>
            <h2>Comanda ID: <?php echo htmlspecialchars($comandaId); ?></h2>
            <p>
                <strong class="comandaData">Data:</strong> <?php echo $comandaData; ?><br>
                <strong class="comandaCost">Cost Total:</strong> <?php echo $comandaCostTotal; ?> €
            </p>
            <ul>
                <?php foreach ($linies as $linia): ?>
                    <li>
                        <strong>Línia ID:</strong> <?php echo htmlspecialchars($linia['lc_id'], ENT_QUOTES, 'UTF-8'); ?><br>
                        <strong>Quantitat:</strong> <?php echo htmlspecialchars($linia['lc_quantitat'], ENT_QUOTES, 'UTF-8'); ?><br>
                        <strong>Preu Unitari:</strong> <?php echo htmlspecialchars($linia['lc_preuunitari'], ENT_QUOTES, 'UTF-8'); ?>€<br>
                        <strong>Preu Total Producte:</strong> <?php echo htmlspecialchars($linia['lc_preutotal'], ENT_QUOTES, 'UTF-8'); ?>€<br>
                        <strong>Producte:</strong> <?php echo htmlspecialchars($linia['producte_nom'], ENT_QUOTES, 'UTF-8'); ?><br>
                        <img 
                            src="<?php echo htmlspecialchars($linia['producte_imatge'], ENT_QUOTES, 'UTF-8'); ?>" 
                            alt="Imatge del producte <?php echo htmlspecialchars($linia['producte_nom'], ENT_QUOTES, 'UTF-8'); ?>" 
                            width="100">
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No s'han trobat comandes.</p>
    <?php endif; ?>
</section>
