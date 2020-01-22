
            <?php echo validation_errors(); ?>

            <?php echo form_open('verifco/connexion'); ?>
            
            <h5>Adresse email :</h5>
            <input type="text" name="mel" value="" size="50" />

            <h5>Mot de passe :</h5>
            <input type="password" name="mdp" value="" size="50" />
            
            <br/>
            <br/>
            <div><input type="submit" value="Se connecter" /></div>
            
            <li><a href="<?php echo site_url('Verifco/modifmdp'); ?>">Mot de passe oublié ?</a></li>
          
            </form>
