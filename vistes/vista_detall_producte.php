<div id="detall_producte">
    <h3><?php echo $producte['producte_nom'] ?></h3>
    <p><?php echo $producte['producte_descripcio'] ?></p>
    <img
        src="<?php echo htmlspecialchars($producte['producte_imatge']); ?>" 
        alt="<?php echo $producte['producte_nom']; ?>" 
        width="100"
    />
    <p> PREU DEL PRODUCTE PER UNITAT: </p>
    <h2><?php echo $producte['producte_preu'] ?></h2>
    
    <form id="formCarrito">
        <input type="hidden" id="idProducte" value="<?php echo $idProducte; ?>">
        <input type="hidden" id="nomProducte" value="<?php echo $producte['producte_nom']; ?>">
        <input type="hidden" id="preuProducte" value="<?php echo $producte['producte_preu']; ?>">
        <label for="quantitat">Quantitat:</label>
        <input 
            type="number" 
            id="quantitat" 
            name="quantitat" 
            value="1" 
            min="1" 
            style="width: 50px; text-align: center; margin: 10px;">
        <br>
        <button type="submit">Afegir al Carret</button>
    </form>

    <div id="message_cart"></div> <!-- AQUÍ ES MOSTRA EL MISSATGE D'ERROR O ÈXIT -->
</div>