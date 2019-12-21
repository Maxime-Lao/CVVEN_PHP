<?php

class Reservations_modele extends CI_Model {
    

    function saverecords(){
        $data = array(
            'pension_reservation' => $this->input->post('pension_reservation'),
            'datedebut_reservation' => $this->input->post('datedebut_reservation'),
            'datefin_reservation' => $this->input->post('datefin_reservation'),
            'nbpersonne_reservation' => $this->input->post('nbpersonne_reservation'),
            'menage_reservation' => $this->input->post('menage_reservation')
    );

    return $this->db->insert('reservation', $data);
    }
    
    function getShow(){
       $this->db->select("*");
       $this->db->from('reservation');
       $query = $this->db->get();
       return $query->result();
    }
    
    
    function deleterecords($id){
                
        $this->db->where('id_reservation', $id);
        $this->db->delete('reservation');       
    }
    
   
}
