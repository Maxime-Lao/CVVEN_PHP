        <title>Insciption</title>

        <?php echo validation_errors(); ?>

        <?php echo form_open('verif/create'); ?>
            

            <h5>Nom :</h5>
            <input type="text" name="nom_client" value="" size="50" />

            <h5>Prénom :</h5>
            <input type="text" name="prenom_client" value="" size="50" />

            <h5>Adresse email :</h5>
            <input type="text" name="mel_client" value="" size="50" />

            <h5>Mot de passe :</h5>
            <input type="password" name="mdp_client" value="" size="50" />

            <h5>Valider mot de passe :</h5>
            <input type="password" name="validmdp" value="" size="50" />

            <h5>Adresse (Domicile) :</h5>
            <input type="text" name="adresse_client" value="" size="50" />

            <h5>Code postale :</h5>
            <input type="text" name="cp_client" value="" size="50" />
            
            <br/>
            <br/>
            <div><input type="submit" value="Valider" /></div>
        </form>


    

