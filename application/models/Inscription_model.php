<?php

class Inscription_model extends CI_Model {
    
    function saverecords(){
        $data = array (
            'nom_client' => $this->input->post('nom_client'),
            'prenom_client' => $this->input->post('prenom_client'),
            'mel_client' => $this->input->post('mel_client'),
            'cp_client' => $this->input->post('cp_client'),
            'adresse_client' => $this->input->post('adresse_client'),
            'mdp_client' => $this->input->post('mdp_client')
        );
        
        return $this->db->insert('client', $data);
    }
}