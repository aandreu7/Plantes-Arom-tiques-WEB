<section id="perfil">
    <h2>Editar Perfil</h2>
    <form action="index.php?accio=actualitzar_perfil" method="POST" enctype="multipart/form-data">
        <label for="profile_image">Fotografia de perfil:</label>
        <br>
        <img src="<?php echo $_SESSION['picture']?>" alt="Foto de perfil" id="current-profile-image" style="max-width: 150px; max-height: 150px; margin-bottom: 10px;">
        <br>
        <input type="file" id="profile_image" name="profile_image">
        <br><br>
        
        <label for="name">Nom complet:</label>
        <input type="text" id="name" name="name" value="<?php echo $_SESSION['name'] ?>" pattern="^(?!\s*$)[A-Za-zÀ-ÿ\s\-']+$" title="El nom només pot contenir lletres, espais, guions i apòstrofs. No pot ser espai." required>
        <br>
        
        <label for="email">Adreça electrònica:</label>
        <input type="email" id="email" name="email" value="<?php echo $_SESSION['email'] ?>" placeholder="exemple@domini.com" title="Format incorrecte." required>
        <br>
        
        <label for="password">Contrasenya:</label>
        <input type="password" id="password" name="password" pattern="[A-Za-z0-9]+" title="Ha de ser un camp alfanumèric sense caràcters especials." required>
        <br>
        
        <label for="address">Adreça:</label>
        <input type="text" id="address" name="address" value="<?php echo $_SESSION['address'] ?>" pattern="^(?!\s*$)[A-Za-z0-9À-ÿ\s\\\-'.,]+$" maxlength="30" title="L'adreça només pot contenir lletres, números, espais, punts, comes, barres invertides i guions. No pot ser espai." required>
        <br>
        
        <label for="population">Població:</label>
        <input type="text" id="population" name="population" value="<?php echo $_SESSION['population'] ?>" pattern="^(?!\s*$)[A-Za-zÀ-ÿ\s\-']+$" maxlength="30" title="La població no pot excedir els 30 caràcters, i només pot contenir lletres, espais, guions i apòstrofs. No pot ser espai." required>
        <br>
        
        <label for="postal">Codi postal:</label>
        <input type="text" id="postal" name="postal" value="<?php echo $_SESSION['postal'] ?>" pattern="^\d{5}" title="El codi postal està compost per 5 números." required>
        <br>
        
        <button type="submit">Actualitzar Perfil</button>
    </form>
</section>
