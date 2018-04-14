<?php
session_start();
//controllo permessi
if($_SESSION[ 'permessi_admin' ] == 1){
header( "Location: http://sensorflow.altervista.org/production/index.php" );}

echo'<div class="col-md-3 left_col">';
 echo'<div class="left_col scroll-view">';
 echo'<div class="navbar nav_title" style="border: 0;">';
    echo'<a href="index.php" class="site_title"><i class="fa fa-circle"></i> <span>Sensor  Flow</span></a>';
        echo'</div>';
            echo'<div class="clearfix"></div>';
            echo'<div class="profile clearfix">';
              echo'<div class="profile_pic">';
                echo'<img src="images/img1.jpg" alt="..." class="img-circle profile_img">';
              echo'</div>';
              echo'<div class="profile_info">';
                echo'<span>Benvenuto,</span>';
                echo'<h2>'.$_SESSION['nome'].' '.$_SESSION['cognome'].'</h2>';
              echo'</div>';
            echo'</div>';
            echo'<br />';
            echo'<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">';
             echo' <div class="menu_section">';

                echo'<ul class="nav side-menu">';
                  echo'<li><a href="visualizza.php"><i class="fa fa-th-list"></i> Visualizza Dati </a>';
                  echo'</li>';
                  echo'<li><a href="sintesi.php"><i class="fa fa-folder-open"></i> Visualizza Sintesi </a>';
                  echo'</li>';
					echo'<li><a href="visualizza_ecc.php"><i class="fa fa-exclamation-circle"></i> Visualizza Eccezioni </a>';
                  echo'</li>';
echo'<li><a href="modcredenziali.php"><i class="fa fa-key"></i> Modifica credenziali </a>';
	 echo'<li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout </a>';
                echo'</ul>';
              echo'</div>';
            echo'</div>';
          echo'</div>';
        echo'</div>';
        ?>
