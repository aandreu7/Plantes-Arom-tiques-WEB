<section id="registre">
    <h2>Registrar-se</h2>
        <form action="index.php?accio=registre" method="POST">
            <label for="name">Nom complet:</label>
            <input type="text" id="name" name="name" pattern="^(?!\s*$)[A-Za-zÀ-ÿ\s\-']+$" title="El nom només pot contenir lletres, espais, guions i apòstrofs. No pot ser espai." required>
            <br>
            <label for="email">Adreça electrònica:</label>
            <input type="email" id="email" name="email" placeholder="exemple@domini.com" title="Format incorrecte." required>
            <br>
            <label for="password">Contrasenya:</label>
            <input type="password" id="password" name="password" pattern="[A-Za-z0-9]+" title="Ha de ser un camp alfanumèric sense caràcters especials." required>
            <br>
            <label for="address">Adreça:</label>
            <input type="text" id="address" name="address" pattern="^(?!\s*$)[A-Za-z0-9À-ÿ\s\\\-'.,]+$" maxlength="30" title="L'adreça només pot contenir lletres, números, espais, punts, comes, barres invertides i guions. No pot ser espai." required>
            <br>
            <label for="population">Població:</label>
            <input type="text" id="population" name="population" pattern="^(?!\s*$)[A-Za-zÀ-ÿ\s\-']+$" maxlength="30" title="La població no pot excedir els 30 caràcters, i només pot contenir lletres, espais, guions i apòstrofs. No pot ser espai." required>
            <br>
            <label for="postal">Codi postal:</label>
            <input type="text" id="postal" name="postal" pattern="^\d{5}" title="El codi postal està compost per 5 números." required>
            <br>
            <button type="submit">Endavant!</button>
        </form>
</section>

<script>
    // AQUESTA FUNCIÓ VALIDA EL CAMP "email" DEL FORMULARI DE REGISTRE
    // DINTRE DE LES VISTES ES PERMET JAVASCRIPT
    document.getElementById('registre').addEventListener('submit', function(event) 
    {
        var email = document.getElementById('email');
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        
        if (!emailPattern.test(email.value)) {
            alert("L'adreça electrònica no és vàlida.");
            event.preventDefault();
        }
    });
</script>