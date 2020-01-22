<?php

class Verif extends CI_Controller {
    
    public function create() {
        
        $this->load->helper(array('form'));
        $this->load->model('Inscription_model');
        $this->load->library('form_validation');
        $this->load->database();
        
        $this->form_validation->set_rules('nom_client', 'Nom', 'required');
        $this->form_validation->set_rules('prenom_client', 'Prénom', 'required');
        $this->form_validation->set_rules('mdp_client', 'Mot de passe', 'required', array('required' => 'Ajoutez des caractère spéciaux (%s, etc ...).'));
        $this->form_validation->set_rules('validmdp', 'Confirmation du mot de passe', 'required');
        $this->form_validation->set_rules('mel_client', 'Email', 'required');
        $this->form_validation->set_rules('adresse_client', 'Adresse (Domicile)', 'required');
        $this->form_validation->set_rules('cp_client', 'code postale', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('inscription/inscription.php');
        }
        else {
            $this->Inscription_model->saverecords();
            $this->load->view('inscription/success.php');
        }
        
    }
}