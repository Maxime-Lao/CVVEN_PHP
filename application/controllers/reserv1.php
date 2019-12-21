<?php

class Reservations extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Reservations_modele');
            $this->load->helper('url_helper');
        }

        
        public function afficher($numclient = 0) {
        /*Condition pour vérifier que le client a bien été indiqué dans l'URL*/
        if ($numclient ==0){
                show_404(); //Erreur 404
        }

        /* Données à transmettre à la vue */
        $data['titre']="Mes réservations";
        $data['id_reservation']=$numclient;
        $data['reserv'] = $this->Reservations_modele->get_reserv($numclient);
        /*Chargement de la vue */
        $this->load->view('templates/header',$data);
        $this->load->view('reservations/afficher',$data);
        $this->load->view('templates/footer',$data);
        
        $this->load->view('templates/header', $data);
        $this->load->view('news/create');
        $this->load->view('templates/footer');

        
        
        
        
    }


    
}


