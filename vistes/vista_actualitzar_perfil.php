<section id="actualitzar_perfil">
    <?php if ($actualitzarCorrecte == 1): ?>
        <p class="success">¡Has actualitzat les dades amb èxit! Si has canviat la imatge de perfil, tardarà uns segons en fer-se visible.</p>
    <?php elseif ($actualitzarCorrecte == -2): ?>
        <p class="warning">Les dades introduïdes no són correctes: </p>  
        <ul class="error-list">
            <?php
                foreach ($errors_actualitzar_perfil as $nom_camp => $error_camp):
                    if (!empty($error_camp)): ?>
                        <li class="error-item"><?php echo htmlspecialchars($error_camp); ?></li>
                    <?php endif;
                endforeach;
            ?>
        </ul>
    <?php else: ?> <!-- $registreCorrecte == -3 -->
        <p class="error">Error a la base de dades i/o error extraordinari. <a href='index.php?accio=perfil'>Prova-ho un altre cop.</a></p>
    <?php endif; ?>
</section>