<?php

class Verifco extends CI_Controller {
    
    public function connexion() {
        
        $this->load->helper(array('form', 'url', 'security'));
        $this->load->model('Connexion_model');
        $this->load->library('form_validation', 'session');
        $this->load->database();
        
        $email = $this->input->post('mel');
        $mdp = $this->input->post('mdp');
        
        $this->form_validation->set_rules('mel', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mdp', 'Mot de passe', 'trim|required|xss_clean');
        $result = $this->Connexion_model->connect($email,$mdp);
        var_dump($result);
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('connexion/connexion.php');
        }
        elseif ($this->form_validation->run() == true && empty($result)){
            $this->session->set_flashdata('noconnect', 'Aucun compte ne correspond à vos identifiants');
            $this->load->view('connexion/connexion.php');
        }
        else {
            $this->session->set_userdata('id_client', $result[0]->id_client);
            $this->load->view('connexion/successtest.php');
        }  
    }
    
    public function modifmdp() {
        $this->load->view('modifmdp/modifmdp');
    }
}
