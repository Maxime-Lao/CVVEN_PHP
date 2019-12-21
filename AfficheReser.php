<!DOCTYPE html>
<html>
    <h1> <?php echo "$titre (Reservation n°$id_reservation)";?> </h1>
   

    <table border="1">
        <thead>
            <tr>
                <th>Numéro réservation</th>
                <th>Pension</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Nombre de personnes</th>
                <th>Ménage fin de séjour</th>
            </tr>
        </thead>
        <?php foreach ($reserv as $news_item): ?>
        <tbody>
            <tr>
                <td><?php echo "$news_item->id_reservation"; ?></td>
                <td><?php echo "$news_item->pension_reservation"; ?></td>
                <td><?php echo "$news_item->datedebut_reservation"; ?></td>
                <td><?php echo "$news_item->datefin_reservation"; ?></td>
                <td><?php echo "$news_item->nbpersonne_reservation"; ?></td>
                <td><?php echo "$news_item->menage_reservation"; ?></td>
            </tr>  
        </tbody>
        <?php endforeach; ?>
    </table>

</html>