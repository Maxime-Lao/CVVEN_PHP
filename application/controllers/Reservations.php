<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservations extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->load->model('Reservations_modele');
        $this->load->database();
        $this->load->view('templates/header');
        $this->load->view('templates/footer');
        $this->load->helper('url');
    }

    public function savedata() {
        $this->load->model('Reservations_modele');
        $this->load->database();
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        
        
        $this->form_validation->set_rules('pension_reservation', 'Pension', 'required');
        $this->form_validation->set_rules('datedebut_reservation', 'DateDebut', 'required');
        $this->form_validation->set_rules('datefin_reservation', 'DateFin', 'required');
        $this->form_validation->set_rules('nbpersonne_reservation', 'NbPersonnes', 'required');
        $this->form_validation->set_rules('menage_reservation', 'Menage', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('reservations/reservation.php');
        } else {
            $this->load->view('reservations/formsuccess.php');
            $this->Reservations_modele->saverecords();
        }
    }
    
    public function show(){
        $this->data['posts'] = $this->Reservations_modele->getShow(); 
        $this->load->view('reservations/show', $this->data);
       
    }
    
    public function delete(){
        
	$this->load->model('Reservations_modele');
        $id=$this->input->get('id');
	$this->Reservations_modele->deleterecords($id);
        $this->load->view('reservations/delete.php');        
    }
    
   
}
