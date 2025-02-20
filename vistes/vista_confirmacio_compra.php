<section id="confirmacio_compra">
    <?php if ($resultat == 1): ?>
        <p class="success">La comanda s'ha realitzat correctament.</p>
        <p>Pots <a href="index.php?accio=categories">seguir comprant</a> o veure les teves <a href="index.php?accio=llistar_comandes">comandes</a>.</p>
        <?php  
        $productes = $_SESSION["infoCartPostCompra"];
        ?>
        <table class="taula-compra">
            <thead>
                <tr>
                    <th>Producte</th>
                    <th>ID Producte</th>
                    <th>Quantitat</th>
                    <th>Preu Unitari (€)</th>
                    <th>Total (€)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productes as $nom => $detall): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($nom); ?></td>
                        <td><?php echo htmlspecialchars($detall["idProducte"]); ?></td>
                        <td><?php echo htmlspecialchars($detall["quantitat"]); ?></td>
                        <td><?php echo number_format($detall["preuProducte"]/$detall["quantitat"], 2); ?></td>
                        <td><?php echo number_format($detall["preuProducte"], 2); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <p class="total"><strong>Total pagat:</strong> 
            <?php 
            $total = 0;
            foreach ($productes as $detall) {
                $total += $detall["preuProducte"];
            }
            echo number_format($total, 2) . " €";
            ?>
        </p>
    <?php else: ?>
        <p class="error">La comanda no s'ha pogut realitzar correctament.</p>
        <p>Fes <a href="index.php?accio=veure_carrito">click aquí </a>per tornar-ho a provar.</p>
    <?php endif; ?>
</section>
