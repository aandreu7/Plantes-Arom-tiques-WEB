<section id="confirmacio_compra">
    <?php if ($resultat==1): ?>
        <p class="success">La comanda s'ha realitzat correctament.</p>  
    <?php else: ?> 
        <p class="error">La comanda no s'ha pogut realitzar correctament. Prova-ho un altre cop.</p>
    <?php endif; ?>
</section>