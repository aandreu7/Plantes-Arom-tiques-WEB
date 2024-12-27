<!-- NOMÉS MOSTRA MISSATGES D'ERRORS -->
<section id="inici_sessio_output">
    <?php if ($iniciSessioCorrecte == -1): ?>
        <p class="warning">Aquest email no existeix...</p>
    <?php elseif ($iniciSessioCorrecte == -2): ?>
        <p class="warning">La contrasenya és incorrecta.</p>  
    <?php else: ?> <!-- $registreCorrecte == -3 -->
        <p class="error">Error a la base de dades i/o error extraordinari. Prova-ho un altre cop.</p>
    <?php endif; ?>
</section>

