<html>
<head>
<title>Réservations des séjours</title>
</head>
<body>  

    
    <?php echo validation_errors(); ?>
    <?php echo form_open('reservations/savedata'); ?>
    
    <form method="post">
        
    
        <h2><center><font size="6"><p style="color: #e89999  ">Formulaire de réservations</p></font></center></h2><br>   
 

    <hr>  
    <h4><p style="color:  #ffffff  ">Pension :</p></h4>
    <center><select name="pension_reservation" size="1">
        <option>Demi-pension</option>
        <option >Complète</option>
    </select></center>
    <br>
    <hr>

    <h4><p style="color:  #ffffff  ">Date de début (Samedi au samedi, 1 semaine, pendant les vacances) :</p></h4>
    <center><input type="date" name="datedebut_reservation" size="50" /></center>
    <br>
    <hr>
    <h4><p style="color:  #ffffff  ">Date de fin :</p></h4>
<center><input type="date" name="datefin_reservation" size="50" /></center>
    <br>
    <hr>
<h4><p style="color:  #ffffff  ">Nombre de personnes :</p></h4>
<input type="text" class="feedback-input" name="nbpersonne_reservation" size="50" />
 <br>
    <hr>
<h4><p style="color:  #ffffff  ">Ménage fin de séjour :</p></h4>
<center><p style="color:  #ffffff  ">Oui:
<input type="radio" name="menage_reservation" value="1" size="50" />&nbsp;&nbsp;&nbsp;
Non:
<input type="radio" name="menage_reservation" value="0" size="50" /></center></p>
<BR><BR>

<div><input type="submit" value="Valider" /></div>



    </form>
       
</body>
</html>
