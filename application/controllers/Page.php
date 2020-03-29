<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }

  function index(){
    //Accès à l'admin et au client
      if($this->session->userdata('level')==='2'){
          $this->load->view('dashboard_view');
      }elseif ($this->session->userdata('level')===NULL) {
        $this->load->view('dashboard_view');
      }else{
          echo "Access Denied";
      }

  }


}
