<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    </head>
    <body>

        <h2><center><p style="color: #000000  ">Affichage des données:</p></center></h2><br>
        <center><table width="600" border="1" cellspacing="5" cellpadding="5">
            <tr style="background:#CCC">
                <th>Id client</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Code Postal</th>
                <th>Adresse</th>
                <th>Supprimer</th>
                <th>Modifier</th>
            </tr>
            <?php foreach ($posts as $post) { ?>
            <tr><td><p style="color:  #000000   "><?= $post->id_client ?></p></td>
                    <td><p style="color:  #000000   "><?= $post->nom_client ?></p>
                    <td><p style="color:  #000000   "><?= $post->prenom_client ?></p>
                    </td><td><p style="color:  #000000   "><?= $post->mel_client ?></p>
                    </td><td><p style="color:  #000000   "><?= $post->cp_client ?></p></td>
                    <td><p style="color:  #000000   "><?= $post->adresse_client ?></p></td>
                    <td><a href='deleteclient?id=<?=$post->id_client ?>'>Supprimer</a></td>
                    <td><a href='updateclient?id=<?=$post->id_client ?>'>Modifier</a></td>
                    </tr>

            <?php } ?>  



        </table>
    </div>    
</div>     
</body>
</html>


