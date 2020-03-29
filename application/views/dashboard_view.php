<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bienvenue</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">
      <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">LOGO</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <!--ACCESS MENUS FOR ADMIN-->
                <?php if($this->session->userdata('level')==='2'):?>
                  <li class="active"><?php echo anchor('Verif/create', 'Créer un utilisateur'); ?></li>
                  <li><?php echo anchor('login/showclient', 'Utilisateurs'); ?></li>
                  <li><?php echo anchor('login/showAdmin', 'Réservations'); ?></li>
                  <li><?php echo anchor('Login/changePassword', 'Mot de passe ?'); ?></li>
                  

                <!--ACCESS MENUS FOR AUTHOR-->
                <?php else:?>
                  <li class="active"><a href="#">Dashboard</a></li>
                  <li><?php echo anchor('login/savedata', 'Réserver'); ?></li>
                  <li><?php echo anchor('login/show', 'Réservations'); ?></li>
                  <li><?php echo anchor('Login/changePassword', 'Mot de passe ?'); ?></li>
                <?php endif;?>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('login/logout');?>">Déconnexion</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>

        <div class="jumbotron">
          <h1>Bienvenue <?php echo $this->session->userdata('username');?> <?php echo $this->session->userdata('prenom');?></h1>
        </div>

      </div>
    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>
