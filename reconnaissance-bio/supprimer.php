<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  
<title>IHM</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="img.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

  <!--icheck-->
  <link href="js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
  <link href="js/iCheck/skins/square/square.css" rel="stylesheet">
  <link href="js/iCheck/skins/square/red.css" rel="stylesheet">
  <link href="js/iCheck/skins/square/blue.css" rel="stylesheet">

  <!--dashboard calendar-->
  <link href="css/clndr.css" rel="stylesheet">

  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="js/morris-chart/morris.css">

  <!--common-->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style-responsive.css" rel="stylesheet">
  <link href="js/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
 <link rel="stylesheet" type="text/css" href="img.css">




  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

  <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="home.php">Application De Reconaissance De l'Iris</a></h1>
      </div>
    
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="mon.php">Reconaissance De l'Iris</a></li>
           <li class="active"><a href="template.php">Comparaison De l'Iris</a></li>
          <li><a class="drop" href="#">Image</a>
            <ul>
              <li><a href="ajouter.php">Ajouter </a></li>
              <li><a href="supprimer.php">Supprimer</a></li>
              
            </ul>
          </li>
         
      </nav>
    </header>
  </div>

</section>
     <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
Supprimer une image                    </header>
                    <div class="panel-body">
                        <form method="post" action="supimg.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1"><b>Inserer l'ID de l'image a supprimer</b></label>
                                <input type="text" class="form-control" name="id" placeholder="entrer l'id de l'image a supprimer" >
                            </div>
                             
                             <button type="submit" class="btn btn-primary" name="ajouter" onclick="alert('votre image a bien ete supprimer')">supprimer</button>
                        </form>
                        
                       
                </section>
            </div>
    
                    

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<script src="js/fullcalendar/fullcalendar.min.js"></script>
<script src="js/external-dragging-calendar.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

</body>
</html>

           
                       
<!-- Placed js at the end of the document so the pages load faster -->

<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<!--easy pie chart-->
<script src="js/easypiechart/jquery.easypiechart.js"></script>
<script src="js/easypiechart/easypiechart-init.js"></script>

<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<script src="js/sparkline/sparkline-init.js"></script>

<!--icheck -->
<script src="js/iCheck/jquery.icheck.js"></script>
<script src="js/icheck-init.js"></script>

<!-- jQuery Flot Chart-->
<script src="js/flot-chart/jquery.flot.js"></script>
<script src="js/flot-chart/jquery.flot.tooltip.js"></script>
<script src="js/flot-chart/jquery.flot.resize.js"></script>


<!--Morris Chart-->
<script src="js/morris-chart/morris.js"></script>
<script src="js/morris-chart/raphael-min.js"></script>

<!--Calendar-->
<script src="js/calendar/clndr.js"></script>
<script src="js/calendar/evnt.calendar.init.js"></script>
<script src="js/calendar/moment-2.2.1.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

<!--Dashboard Charts-->
<script src="js/dashboard-chart-init.js"></script>


</body>
</html>


