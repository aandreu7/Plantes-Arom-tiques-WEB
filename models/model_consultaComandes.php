<?php
function getComandes($conn, $idUser): array
{
    $sqlVerify = "
        SELECT comanda.comanda_id,
               comanda.comanda_costtotal,
               comanda.comanda_data,
               linia_comanda.lc_id,
               linia_comanda.lc_quantitat,
               linia_comanda.producte_id,
               producte.producte_nom,
               producte.producte_imatge
        FROM comanda
        INNER JOIN linia_comanda ON linia_comanda.comanda_id = comanda.comanda_id
        INNER JOIN producte ON linia_comanda.producte_id = producte.producte_id
        WHERE comanda.usuari_id = $1
        ORDER BY comanda.comanda_id, linia_comanda.lc_id";
    
    $resultat = pg_query_params($conn, $sqlVerify, array($idUser));

    if ($resultat) 
    {
        $comandes = [];

        while ($row = pg_fetch_assoc($resultat)) 
            $comandes[$row['comanda_id']][] = $row;

        return $comandes;
    }
    
    return [];
}
?>
