<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial=scale=1" />
<link rel="icon" href="favicon-.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" type="text/css" href="css/main_theam.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/photoGallery.css" />
<link rel="stylesheet" type="text/css" href="css/slider/style.css" />
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<link rel="icon" href="images/favicon-.png" type="image/x-icon">
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="js/slider/slider.js"></script>
<script type="text/javascript" src="js/slider/slider_2.js"></script>




</head>


<div class="row">
	<div class="row header_main">
        	<div class="col-md-2 col-sm-2 col-xs-12" align="center"><img src="images/logo.png" width="250" height="70"></div>
            <div class="col-md-7 col-sm-7 col-xs-12 main_name" align="center">COLLEGE MANAGEMENT SYSTEM</div>
            <div class="col-md-3 col-sm-3 col-xs-12" align="center">
                <div class="social_icons">
                    <ul>
                        <li><a href="https://www.facebook.com/freeonlineprojects/" target="_blank"><img src="images/fb1.png" width="32" height="32" /></a></li>
                        <li><a href="https://plus.google.com/101612697119159092378" target="_blank"><img src="images/google-plus.png" width="32" height="32" /></a></li>
                        <li><a href="https://www.linkedin.com/in/free-time-learn-07598b143/" target="_blank"><img src="images/li1.png" width="32" height="32" /></a></li>
                        <li><a href="https://twitter.com/freetimelearn" target="_blank"><img src="images/tw1.png" width="32" height="32" /></a></li>
                    </ul>
                </div>
           </div>
    </div>
	<div class="clearfix"></div>
	<!-- Start Navbar -->
  <nav class="navbar navbar-default" id="flat-mega-menu">
  <div class="row">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="index.php">LOGO</a>-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
       		 <li><a href="dashboard.php">DASHBOARD</a></li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SUBJECTS<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="ad-subjects.php">ADD SUBJECT</a></li>
                <li><a href="ad-view-subjects.php">VIEW SUBJECTS</a></li>
              </ul>
             </li>
             <li><a href="view-faculty.php">FACULTY DETAILS</a></li>
             <li><a href="view-students.php">STUDENT DETAILS</a></li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">REFERENCE BOOKS<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="ad-ref-books.php">ADD REFERENCE BOOKS</a></li>
                <li><a href="ad-view-ref-books.php">VIEW REFERENCE BOOKS</a></li>
				    
              </ul>
             </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><i class="fa fa-user"></i> LOGOUT</a></li>
          </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- End Nav Bar -->
</div>

<!--modal for login form starts -->
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4 modal_bg">
	<div id="myModal_1" class="modal modal_2 fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
  <div class="modal-header">
   <form action="" method="post">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="images/close.png" width="20" height="20"></button>
    <h4 class="modal-title">LOGIN ACCOUNT</h4>
  </div>
  <div class="modal-body">
    <input class="form-control modal_form" type="text" name="user_name" data-tabindex="2" placeholder="User Name" required>
    <input class="form-control modal_form" type="password" name="user_pass" data-tabindex="5" placeholder="Password" required>
    <button class="btn modal_form_btn" name="login" type="submit">LOGIN NOW</button>
  </div>
 </form>
</div>
</div>
<div class="col-md-4"></div>
</div>


