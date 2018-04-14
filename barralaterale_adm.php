<?php
 session_start();
//controllo permessi
if($_SESSION[ 'permessi_admin' ] == 0){
header( "Location: http://sensorflow.altervista.org/production/visualizza.php" );}

if(isset($_SESSION['email']))
{
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
                echo'<h3></h3>';
                echo'<ul class="nav side-menu">';
                  echo'<li><a><i class="fa fa-plus"></i> Aggiungi <span class="fa fa-chevron-down"></span></a>';
                    echo'<ul class="nav child_menu">';
                      echo'<li><a href="autente.php">Aggiungi Utente</a></li>';
                      echo'<li><a href="asensore.php">Aggiungi Sensore</a></li>';
	echo'<li><a href="amodello.php">Aggiungi Modello</a></li>';
                    echo'</ul>';
                  echo'</li>';
					echo'<li><a><i class="fa fa-search"></i> Cerca <span class="fa fa-chevron-down"></span></a>';
                    echo'<ul class="nav child_menu">';
                      echo'<li><a href="cercautente.php">Cerca Utente</a></li>';
                      echo'<li><a href="cercasensore.php">Cerca Sensore</a></li>';
                    echo'</ul>';
                  echo'</li>';
                  echo'<li><a><i class="fa fa-pencil"></i> Modifica <span class="fa fa-chevron-down"></span></a>';
                    echo'<ul class="nav child_menu">';
                      echo'<li><a href="modutente.php">Modifica Utente</a></li>';
                      echo'<li><a href="modsensore.php">Modifica Sensore</a></li>';
                    echo'</ul>';
                  echo'</li>';
                  echo'<li><a><i class="fa fa-trash"></i> Elimina <span class="fa fa-chevron-down"></span></a>';
                    echo'<ul class="nav child_menu">';
                      echo'<li><a href="esensore.php">Elimina Sensore</a></li>';
                      echo'<li><a href="eutente.php">Elimina Utente</a></li>';
                    echo'</ul>';
                  echo'</li>';
	echo'<li><a href="alettura.php"><i class="fa fa-bug"></i> DEBUG_AggiungiLettura </a>';
	echo'<li><a href="modcredenziali.php"><i class="fa fa-key"></i> Modifica credenziali </a>';
	 echo'<li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout </a>';
                echo'</ul>';
              echo'</div>';
            echo'</div>';
          echo'</div>';
        echo'</div>';
}else{
	     header("Location: http://sensorflow.altervista.org/production/login.php");
}
        ?>
