<html>
<head>
<title>Réservations des séjours</title>
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>  

    
    <?php echo validation_errors(); ?>
    <?php echo form_open('login/savedata'); ?>
    
    <form method="post">
        
    <div class="container">
       <div class="col-md-5 col-md-offset-4">
        <h2><center><font size="6">Formulaire de réservations</font></center></h2><br>   
 
            <div class="login-page">
                <div class="form">
                    <div class="form-group">
    
                        <h4>Pension :</h4>
                        <center><select name="pension_reservation" size="1" class="form-control">
                        <option>Demi-pension</option>
                        <option >Complète</option>
                        </select></center><br>
        
                        <hr>

                        <h4>Date de début (Samedi au samedi, 1 semaine, pendant les vacances) :</h4>
                        <center><input type="date" class="form-control" name="datedebut_reservation" size="50" /></center>
        
                        <hr>
                        <h4>Date de fin :</h4>
                        <center><input type="date" class="form-control" name="datefin_reservation" size="50" /></center>
        
                        <hr>
                        <h4>Nombre de personnes :</h4>
                        <input type="text" class="form-control" name="nbpersonne_reservation" size="50" placeholder="Nombre de personnes" />
    
                        <hr>
                        <h4>Ménage fin de séjour :</h4>
                        <center>Oui:
                        <input type="radio" name="menage_reservation" value="1" size="50" />    
                        Non:
                        <input type="radio" name="menage_reservation" value="0" size="50" /></center></p><br>


                        <button type="submit" class="btn btn-lg btn-primary btn-block">Valider</button>
                    </div>
                </div>

            </div>
         
        </div>
    </div>   
</body>
</html>
