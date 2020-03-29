<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
    $this->load->library('form_validation');
  }

  function index(){
    $this->load->view('login_view');
  }

  function auth(){
    $this->load->library('form_validation'); 
    $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->login_model->validate($email,$password);
    $this->form_validation->set_rules('email', 'Email', 'required');  
    $this->form_validation->set_rules('password', 'Password', 'required');  
    if($this->form_validation->run())  
    {  
      if($validate->num_rows() > 0){
          $data  = $validate->row_array();
          $prenom  = $data['prenom_client'];
          $name  = $data['nom_client'];
          $email = $data['mel_client'];
          $level = $data['user_level'];
          $id = $data['id_client'];
          $idv = $data['id_reservation'];
          $sesdata = array(
            'prenom'  => $prenom,
            'username'  => $name,
            'email'     => $email,
            'level'     => $level,
            'id'     => $id,
            'idv'     => $idv,
            'logged_in' => TRUE
          );
          $this->session->set_userdata($sesdata);
          // Accès au compte admin
          if($level === '2'){
            redirect('page');
          // Accès aux autres comptes
          }else{
            redirect('page');
          }
      }else{
        echo $this->session->set_flashdata('msg','Email ou mot de passe incorrecte !');
        redirect('login');
      }
    }
  }

  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }


  //Changer de mot de passe
  public function changePassword()
    {

        $data['title'] = 'Change Password';

        $this->load->library('form_validation');

        $this->form_validation->set_rules('oldpass', 'old password', 'callback_password_check');
        $this->form_validation->set_rules('newpass', 'new password', 'required');
        $this->form_validation->set_rules('passconf', 'confirm password', 'required|matches[newpass]');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if($this->form_validation->run() == false) {
            $this->load->view('modifmdp/modifmdp.php', $data);

        }
        else {

            $id = $this->session->userdata('id');

            $newpass = $this->input->post('newpass');

            $this->login_model->update_user($id, array('mdp_client' => md5($newpass)));

            redirect('page');
        }
    }

    public function password_check($oldpass)
    {
        $id = $this->session->userdata('id');
        $user = $this->login_model->get_user($id);

        if($user->mdp_client !== md5($oldpass)) {
            $this->form_validation->set_message('password_check', 'Incorrect');
            return false;
        }

        return true;
    }

    //Réservation
    public function savedata() {

      $this->form_validation->set_rules('pension_reservation', 'Pension', 'required');
      $this->form_validation->set_rules('datedebut_reservation', 'DateDebut', 'required');
      $this->form_validation->set_rules('datefin_reservation', 'DateFin', 'required');
      $this->form_validation->set_rules('nbpersonne_reservation', 'NbPersonnes', 'required');
      $this->form_validation->set_rules('menage_reservation', 'Menage', 'required');

      if ($this->form_validation->run() == false) {
          $this->load->view('reservations/reservation.php');
      } else {
          $id = $this->session->userdata('id');
          $this->login_model->saverecords($id);
          $this->load->view('reservations/formsuccess.php');
      }
  }
  
  public function show(){
      $id = $this->session->userdata('id');
      $this->data['posts'] = $this->login_model->getShow($id); 
      $this->load->view('reservations/show', $this->data);
     
  }

  public function showAdmin(){
    $this->data['posts'] = $this->login_model->getShowAdmin(); 
    $this->load->view('reservations/show', $this->data);
   
}
  
  public function delete(){

      $id=$this->input->get('id');
      $this->login_model->deleterecords($id);
      $this->load->view('reservations/delete.php');   
  }

  public function update() {
   
    $this->form_validation->set_rules('pension_reservation', 'Pension', 'required');
      $this->form_validation->set_rules('datedebut_reservation', 'DateDebut', 'required');
      $this->form_validation->set_rules('datefin_reservation', 'DateFin', 'required');
      $this->form_validation->set_rules('nbpersonne_reservation', 'NbPersonnes', 'required');
      $this->form_validation->set_rules('menage_reservation', 'Menage', 'required');

    if ($this->form_validation->run() == false) {
          $this->load->view('reservations/update.php');
    } else {
        $id=$this->input->get('id');
        $this->login_model->update($id);
        $this->load->view('reservations/formsuccess.php');
    }
    
  }

  //Gerer les utilisateurs
  public function showclient(){
      if($this->session->userdata('level')==='2'){
          $this->data['posts'] = $this->login_model->getShowClient(); 
          $this->load->view('reservations/client', $this->data);
      }else{
          echo "Access Denied";
      }
      
     
  }
  
  public function deleteclient(){
      
    $id=$this->input->get('id');
    $this->login_model->deleterecordsClient($id);
    $this->load->view('reservations/deleteclient.php');        
  }

  public function updateclient() {
   
    $this->form_validation->set_rules('nom_client', 'Nom', 'required');
    $this->form_validation->set_rules('prenom_client', 'Prénom', 'required');
    $this->form_validation->set_rules('adresse_client', 'Adresse (Domicile)', 'required');
    $this->form_validation->set_rules('cp_client', 'code postale', 'required');
    
    if ($this->form_validation->run() == FALSE){
        $this->load->view('reservations/updateclient.php');
    }
    else {
      $id=$this->input->get('id');
        $this->login_model->updateclient($id);
        $this->load->view('inscription/success.php');
    }
    
  }
}
