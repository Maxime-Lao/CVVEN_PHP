<html>
<head>
<title>Modifier</title>
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
    <body>  
        <?php echo validation_errors(); ?>

        <?php echo form_open('login/updateclient'); ?>
        <form method="post">
        <div class="container">
            <div class="col-md-4 col-md-offset-4">   
            <center><h2 class="form-signin-heading">Modification</h2><br></center>
            <h5>Nom :</h5>
            <input type="text" name="nom_client" value="" size="50" />

            <h5>Prénom :</h5>
            <input type="text" name="prenom_client" value="" size="50" />


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


    

