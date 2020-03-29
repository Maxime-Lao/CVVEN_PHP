<html>
<head>
<title>Inscription</title>
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
    <body>  
        <?php echo validation_errors(); ?>

        <?php echo form_open('verif/create'); ?>
        <form method="post">
        <div class="container">
            <div class="col-md-4 col-md-offset-4">   
            <center><h2 class="form-signin-heading">Inscription</h2><br></center>
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
            <div><input type="submit" class="btn btn-lg btn-primary btn-block" value="Valider" /></div>
            </div>
        </div>    
        </form>
    </body>
</html>


    

