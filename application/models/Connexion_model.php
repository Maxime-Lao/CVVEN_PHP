<?php

class Connexion_model extends CI_Model {
    
    protected $table = 'client';
    
    public function connect($email,$mdp) {
        
        return $this->db->select('mel_client,mdp_client')
                ->from($this->table)
                ->where('mel_client', $email)
                ->where('mdp_client', $mdp)
                ->get()
                ->result();
    }
}