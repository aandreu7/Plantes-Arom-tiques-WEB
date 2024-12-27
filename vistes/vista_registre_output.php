<section id="registre_output">
    <?php if ($registreCorrecte == 1): ?>
        <p class="success">¡T'has registrat amb èxit!</p>
    <?php elseif ($registreCorrecte == -1): ?>
        <p class="warning">Aquest email ja està registrat...</p>
    <?php elseif ($registreCorrecte == -2): ?>
        <p class="warning">Les dades introduïdes no són correctes: </p>  
        <ul class="error-list">
            <?php
                foreach ($errors_registre as $nom_camp => $error_camp):
                    if (!empty($error_camp)): ?>
                        <li class="error-item"><?php echo htmlspecialchars($error_camp); ?></li>
                    <?php endif;
                endforeach;
            ?>
        </ul>
    <?php else: ?> <!-- $registreCorrecte == -3 -->
        <p class="error">Error a la base de dades i/o error extraordinari. Prova-ho un altre cop.</p>
    <?php endif; ?>
</section>