<!DOCTYPE html>
<html>
<head>
<title>Changer de mot de passe</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>


<div class="container">
       <div class="col-md-5 col-md-offset-4">
        <center><h1>Changer de mot de passe</h1></center><br>
        <?php echo form_open('login/changePassword', array('id' => 'passwordForm'))?>
            <div class="form-group">
                <input type="password" name="oldpass" id="oldpass" class="form-control" placeholder="Ancien mot de passe" />
                <?php echo form_error('oldpass', '<div class="error">', '</div>')?>
            </div>
            <div class="form-group">
                <input type="password" name="newpass" id="newpass" class="form-control" placeholder="Nouveau mot de passe" />
                <?php echo form_error('newpass', '<div class="error">', '</div>')?>
            </div>
            <div class="form-group">
                <input type="password" name="passconf" id="passconf" class="form-control" placeholder="Confirmer le nouveau mot de passe" />
                <?php echo form_error('passconf', '<div class="error">', '</div>')?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Valider</button>
            </div>
        <?php echo form_close(); ?>
    </div>
</div>

</body>
</html>
