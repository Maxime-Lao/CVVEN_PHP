<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('reserv/create'); ?>

    <h5>Pension:</h5>
    <select name="pension_reservation" size="1">
        <option>Demi-pension</option>
        <option >Complète</option>
    </select>

    <h5>Date de début</h5>
    <input type="date" name="datedebut_reservation" size="50" />

    <h5>Date de fin</h5>
    <input type="date" name="datefin_reservation" size="50" />

    <h5>Nombre de personnes</h5>
    <input type="text" name="nbpersonne_reservation" size="50" />

    <h5>Ménage fin de séjour</h5>
    Oui:
    <input type="radio" name="menage_reservation" value="1" size="50" />
    Non:
    <input type="radio" name="menage_reservation" value="0" size="50" />


    <div><input type="submit" value="Valider" /></div>

