<html>
<head>
<title>Réservations des séjours</title>
</head>
<body>  

    
    <?php echo validation_errors(); ?>
    <?php echo form_open('reservations/savedata'); ?>
    
    <form method="post">
        
    
        <h2><center><font size="6">Formulaire de réservations</font></center></h2>   
 
        <div class="login-page">
            <div class="form">
                <form class="login-form">
    
                    <h4>Pension :</h4>
                    <center><select name="pension_reservation" size="1">
                    <option>Demi-pension</option>
                    <option >Complète</option>
                    </select></center><br>
    
                     <hr>

                    <h4>Date de début (Samedi au samedi, 1 semaine, pendant les vacances) :</h4>
                    <center><input type="date" name="datedebut_reservation" size="50" /></center>
    
                     <hr>
                     <h4>Date de fin :</h4>
                     <center><input type="date" name="datefin_reservation" size="50" /></center>
    
                     <hr>
                     <h4>Nombre de personnes :</h4>
                     <input type="text" class="feedback-input" name="nbpersonne_reservation" size="50" />
 
                     <hr>
                     <h4>Ménage fin de séjour :</h4>
                     <center>Oui:
                     <input type="radio" name="menage_reservation" value="1" size="50" />    
                     Non:
                     <input type="radio" name="menage_reservation" value="0" size="50" /></center></p>


                     <button>Valider</button>

                </form>
            </form>
         </div>
     </div>
       
</body>
</html>
