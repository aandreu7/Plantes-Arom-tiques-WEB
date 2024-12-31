async function getProductes(categoria_id)
{
    var productes = await fetch("./controladors/controlador_llistar_productes.php?categoria_id="+categoria_id);
    var productesText = await productes.text();
    document.getElementById("llistat_categories_canvia_productes").innerHTML = productesText;
}

async function getDetallProducte(producte_id)
{
    var detallProducte = await fetch("./controladors/controlador_detall_producte.php?producte_id="+producte_id);
    var detallProducteText = await detallProducte.text();
    document.getElementById("llistat_categories_canvia_productes").innerHTML = detallProducteText;
}

$(document).ready(function() 
{
    $('#menuDesplegableIcon').click(function() 
    {
        $('#opcionsMenuDesplegable').toggle();
        
        $('#opcionsMenuDesplegable').html(""); // BORRAR EL CONTINGUT ANTERIOR DEL MENÚ

        $.ajax({
            url: '../vistes/vista_opcions_menu_desplegable.php?logued=' + isLoguedIn,
            method: 'GET',
            success: function(data) {
                $('#opcionsMenuDesplegable').html(data);
            },
            error: function() {
                $('#opcionsMenuDesplegable').html('<li>Error al carregar el menú</li>');
            }
        });        
    });
});

//=========== FUNCIONS CARRITO ===========

async function treureProducteCarrito(nomProducte) 
{
    let data = await fetch("../controladors/controlador_treure_producte_carrito.php?"+"nomProducte="+nomProducte.toString());
    let dataText = await data.text();
    document.getElementById("container_veure_carrito").innerHTML = dataText;
}

async function buidarCarrito() {
    const resposta = await fetch("../controladors/controlador_buidar_carrito.php");
    if (resposta.ok)
        window.location.href = "index.php?accio=veure_carrito";
    else
        alert('Error buidant el carrito :(');
}

async function finalitzarCompra()
{
    let resposta = await fetch("../controladors/controlador_desar_comanda.php");
    let respostaText = await resposta.text();
    window.location.href="index.php?accio=confirmacio_compra&resultat="+respostaText;
}

document.addEventListener("DOMContentLoaded", () => {
    document.body.addEventListener("submit", async (event) => {
        if (event.target && event.target.id === "formCarrito") {
            event.preventDefault();

            var idProducte = document.querySelector("#idProducte").value;
            var nomProducte = document.querySelector("#nomProducte").value;
            var quantitat = document.querySelector("#quantitat").value;
            var preuUnitat = document.querySelector("#preuProducte").value;

            document.getElementById("message_cart").innerHTML = "Afegint producte al carrito...";

            try 
            {
                var respuesta = await fetch("../controladors/controlador_comprar.php?idProducte=" + idProducte + "&nomProducte=" + nomProducte + "&quantitat=" + quantitat + "&preuUnitat=" + preuUnitat);

                var data = await respuesta.text();

                console.log("../controladors/controlador_comprar.php?nomProducte=" + nomProducte + "&quantitat=" + quantitat + "&preuUnitat=" + preuUnitat);

                document.getElementById("message_cart").innerHTML = data;

                var resumCar = await fetch("../controladors/controlador_resum_carrito.php");

                var dataCar = await resumCar.text();

                console.log("Respuesta de controlador_resum_carrito.php: ", dataCar);
                document.getElementById("container_resum_carrito").innerHTML = dataCar;

            } 
            catch (error) 
            {
                document.getElementById("message_cart").innerHTML = "Error agregant el producte al carrito.";
                console.error("Error al agregar el producto al carrito: ", error);
            }
        }
    });
});