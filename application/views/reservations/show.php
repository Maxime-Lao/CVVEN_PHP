<!DOCTYPE html>
<html lang="en">
    <head>

    </head>
    <body>

        <h2><center><p style="color: #000000  ">Affichage des données:</p></center></h2><br>
        <center><table width="600" border="1" cellspacing="5" cellpadding="5">
            <tr style="background:#CCC">
                <th>Id reservation</th>
                <th>Pension</th>
                <th>Date de débutl</th>
                <th>Date de fin</th>
                <th>Nombre de personnes</th>
                <th>Menage</th>
                <th>Verification</th>
                <th>Effacer</th>
                <th>Modifier</th>
            </tr>
            <?php foreach ($posts as $post) { ?>
            <tr><td><p style="color:  #000000   "><?= $post->id_reservation ?></p></td>
                    <td><p style="color:  #000000   "><?= $post->pension_reservation ?></p>
                    </td><td><p style="color:  #000000   "><?= $post->datedebut_reservation ?></p>
                    </td><td><p style="color:  #000000   "><?= $post->datefin_reservation ?></p></td>
                    <td><p style="color:  #000000   "><?= $post->nbpersonne_reservation?></p></td>
                    <td><p style="color:  #000000   "><?php
                        if ($post->menage_reservation == 1) {
                            echo "oui";
                        } else {
                            echo "non";
                        }
                    ?></td>
                    <td><p style="color:  #000000   "><?= $post->verif_reservation ?></p></td>
                    <td><a href='delete?id=<?=$post->id_reservation ?>'>Delete</a></td>
                    <td><a href='update?id=<?=$post->id_reservation ?>'>Update</a></td>
                    </tr>

            <?php } ?>  



        </table>
    </div>    
</div>     
</body>
</html>


