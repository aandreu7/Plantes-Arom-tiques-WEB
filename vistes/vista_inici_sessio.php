<section id="inici_sessio">
    <h2>Iniciar Sessió</h2>
        <form action="index.php?accio=inici_sessio" method="post">
            <label for="email">Adreça electrònica:</label>
            <input type="text" id="email" name="email" required>
            <br>
            <label for="password">Contrasenya:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit">Endavant!</button>
        </form>
    <div id="no_registrat">
        <h3>No t'has registrat encara?</h3>
        <a href="index.php?accio=registre" style="text-decoration: underline;"><h3>A què esperes?</h3></a> 
    </div>
</section>