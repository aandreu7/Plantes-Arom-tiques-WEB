<section id="carritoCompra">
    <?php
        if (empty($cart)) 
        { ?>
            <h3>No tens productes al teu cabàs. Et donem un parell de suggeriments...</h3>
            <section id="suggeriments">
                <div class="suggeriment">
                    <img src="../images/equinacea.webp" alt="Equinàcia">
                    <h2>Equinàcia</h2>
                </div>
                <div class="suggeriment">
                    <img src="../images/geranio.webp" alt="Gerani">
                    <h2>Gerani</h2>
                </div>
                <div class="suggeriment">
                    <img src="../images/aloevera.webp" alt="Àloe Vera">
                    <h2>Àloe Vera</h2>
                </div>
                <div class="suggeriment">
                    <img src="../images/hibisco.webp" alt="Híbisc">
                    <h2>Híbisc</h2>
                </div>
            </section>
            <a href="index.php?accio=categories"><h3>Explora el nostre catàleg!</h3></a>
        <?php
        } 
        else 
        {
            echo "<h3>Carrito de la compra</h3>";
            echo "<div id='tablaCarrito'>";
            echo "<table border='1'>";
            echo "<tr><th>Producte</th><th>Quantitat</th><th>Preu Unitari</th><th>Total</th><th></th></tr>";

            $total = 0;

            foreach ($cart as $producte => $detall) 
            {
                $quantitat = $detall['quantitat'];
                $preuProducte = $detall['preuProducte'];
                $preuUnitari = $preuProducte / $quantitat;
                $subtotal = $preuProducte;
                $total += $subtotal;

                echo "<tr>";
                echo "<td>" . htmlspecialchars($producte) . "</td>";
                echo "<td>
                        <form id='form-modificar' action='../controladors/controlador_modificar_quantitat.php' method='POST'>
                            <input type='number' id='quantitat' name='quantitat' value='$quantitat' min='1'/>
                            <input type='hidden' name='producte' value='$producte' />
                            <button type='submit' class='btn-modificar'>Modificar</button>
                        </form>
                      </td>";
                echo "<td>" . number_format($preuUnitari, 2, ',', '.') . " €</td>";
                echo "<td>" . number_format($subtotal, 2, ',', '.') . " €</td>";
                echo "<td><button class='btn-eliminar' onclick=\"treureProducteCarrito('$producte')\">Treure</button></td>";
                echo "</tr>";
            }

            echo "</table>";
            echo "</div>";

            echo "<br><strong>Total: " . number_format($total, 2, ',', '.') . " €</strong>";

            echo "<br><button class='btn-buidar' onclick='buidarCarrito()'>Buidar carrito</button>";

            if (isset($_SESSION["logued"]) && $_SESSION["logued"] == true)
                echo "<br><button id='buttonFinalitzarCompra' class='btn-finalitzar' onclick='finalitzarCompra()'>Finalitzar Compra</button>"; 
            else
                echo "<a href='../index.php?accio=inici_sessio'><p>Inicia sessió per finalitzar la compra.</p></a>";
        }
    ?>
</section>