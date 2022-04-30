<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from thevectorlab.net/flatlab-4/basic_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 13:54:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Hopital</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <!--right slidebar-->
      <!--dynamic table-->
    <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
      <link href="css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <i class="fa fa-bars"></i>
          </div>
          <!--logo start-->
          <a href="index-2.html" class="logo">Flat<span>lab</span></a>
          <!--logo end-->
          <div class="top-nav ">
              <!--search & user info start-->
              <ul class="nav pull-right top-menu">
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <img alt="" src="img/avatar1_small.jpg">
                          <span class="username"><?= $_SESSION['username'] ?></span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout dropdown-menu-right">
                          <div class="log-arrow-up"></div>
                          <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                          <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                          <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                          <li><a href="login.php"><i class="fa fa-key"></i> Log Out</a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
              </ul>
              <!--search & user info end-->
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                <?php if(isset($_SESSION['user_type']))
                {
                  switch ($_SESSION['user_type']) {
                    case "agent d'acceuil":
                    echo "<li><a href='basic_table.php'><i class='fa fa-th'></i> Table des patients</a></li>";
                    break;
                    case "gestionnaire":
                    echo "<li><a href='table_pers.php'><i class='fa fa-th'></i> Table des users</a></li>
                          <li><a href='listepersonnel.php'><i class='fa fa-th'></i> Table du personnel</a></li>
                          <li><a href='tableequip.php'><i class='fa fa-th'></i> Table des équipements</a></li>";
                    break;
                    case "pharmacien":
                    echo "<li><a href='tablepharma.php'><i class='fa fa-th'></i> Table des médicaments</a></li>";
                    break;
                    case "medecin":
                    echo "<li><a href='tablemed.php'><i class='fa fa-th'></i> Table des patients</a></li>";
                    break;
                    case "financier":
                    echo "<li><a href='prixmed.php'><i class='fa fa-th'></i> Prix des médicaments</a></li>
                          <li><a href='prixop.php'><i class='fa fa-th'></i> Prix des opérations</a></li>
                          <li><a href='tablefinance.php'><i class='fa fa-th'></i> Facture des patients</a></li>";
                    break;
                  }
                }
                ?></span>
              </a>
            </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <?php //switch($_SESSION['type_personnele'])
            //                              case 'medecin': echo "patient"
                           ?>