<?php 
//session_start();
include("inc1/function.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin| </title>

    <!-- Bootstrap -->
    <link href="assets1/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets1/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets1/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="assets1/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="assets1/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet'">
    
    <!-- Custom Theme Style -->
    <link href="assets1/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
           

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="assets1/img/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenue</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
               
                <ul class="nav side-menu">
                <h3>CRUD</h3>
                  <li><a href="template1.php?page=consequence"><i class="fa fa-home"></i> Consequences</a>
                    
                  </li>
                 
                
                  <li><a href="template1.php?page=cause"><i class="fa fa-check"></i> Causes </a>
                    
                  </li>
                 
                  <li><a href="template1.php?page=solution"><i class="fa fa-plus"></i> Solutions </a>
                    
                  </li>
                  <li><a href="template1.php?page=historique"><i class="fa fa-line-chart"></i>Historiques</a>
                  </li>
                  <li><a href="template1.php?page=definition"><i class="fa fa-shopping-cart"></i> Definitions</a>
                  </li>
                  
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="assets1/img/user.png" alt="">Admin
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        
                   
                      <a class="dropdown-item"  href="deconnexion.php"><i class="fa fa-sign-out pull-right"></i> Se deconnecter</a>
                    </div>
                  </li>
  
                 
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

       
        <!-- /page content -->
   
        <div class="right_col" role="main">
              <?php
                include($_GET['page'].'.php');
                ?>
        </div>

                
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            RANDRIAMAMBOLA Soatoavina koloina Ornella ETU001168
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    
    <!-- jQuery -->
    <script src="assets1/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="assets1/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="assets1/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets1/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="assets1/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="assets1/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- morris.js -->
    <script src="assets1/vendors/raphael/raphael.min.js"></script>
    <script src="assets1/vendors/morris.js/morris.min.js"></script>
    <!-- gauge.js -->
    <script src="assets1/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="assets1/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Skycons -->
    <script src="assets1/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="assets1/vendors/Flot/jquery.flot.js"></script>
    <script src="assets1/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="assets1/vendors/Flot/jquery.flot.time.js"></script>
    <script src="assets1/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="assets1/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="assets1/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="assets1/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="assets1/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="assets1/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="assets1/vendors/moment/min/moment.min.js"></script>
    <script src="assets1/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="assets1/js/custom.min.js"></script>

  </body>
</html>