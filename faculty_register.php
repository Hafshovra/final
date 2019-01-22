<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial=scale=1" />
<link href="http://www.freetimelearning.com/images/favicon.png" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" type="text/css" href="css/main_theam.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/photoGallery.css" />
<link rel="stylesheet" type="text/css" href="css/slider/style.css" />
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-100094943-1', 'auto');
  ga('send', 'pageview');
</script>
<title>FACULTY REGISTER</title>
<?php include('css_files.php'); ?>
</head>

<body>

<?php 
include('db.php'); 
include('header.php'); 
?>
<div class="sub_header_bg">
	FACULTY REGISTER
</div>	
<div class="strip" align="right">
	<a href="index.php">Home</a> &nbsp;<span style="color:#FFF;" class="fa fa-angle-right"></span>&nbsp; <a href="">Faculty Register</a>
</div>
<?php
	if(isset($_POST['faculty_register'])){ //echo "<pre />"; print_r($_POST); die;
		$name = $_POST['faculty_name'];
		$email_id = $_POST['email_id'];
		$clg_email_id = $_POST['clg_email_id'];
		$pass = md5($_POST['faculty_pass']);
		$branch = $_POST['branch'];
		$query = $db->query("INSERT INTO `faculty_register`(`id`, `name`, `email_id`, `clg_mail_id`, `password`, `branch`) VALUES ('','$name','$email_id','$clg_email_id','$pass','$branch')") or die(mysqli_error());
		
		if($query){
			echo "<script>alert('Successfully Registered')</script>";
			}
			
		
		}

?>

<!-- Start Content -->
    <div class="row m50_0">
    	<div class="col-md-5 col-sm-5 col-xs-12">
          <form action="" method="post" enctype="multipart/form-data">
        	<input class="form-control modal_form" type="text" name="faculty_name" placeholder="Name" required="required" />
            <input class="form-control modal_form" type="email" name="email_id" placeholder="Email Id" required="required" />
            <input class="form-control modal_form" type="email" name="clg_email_id" placeholder="College Email Id" required="required" />
            <input class="form-control modal_form" type="password" name="faculty_pass" placeholder="Password" required="required" />
            <select class="form-control modal_form" name="branch">
            	<option value="">Select Branch</option>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="ECE">ECE</option>
            </select>            
            <button class="btn modal_form_btn" name="faculty_register" type="submit">REGISTER NOW</button>
           </form>
           <div style="margin-top:20px; font-size:16px;">Already Register? Please <a href="#myModal_2" data-toggle="modal"> Login Now</a></div>
        </div>
        <div class="col-md-7 col-sm-7 col-xs-12"></div>
    </div>
<!-- End Content -->



<?php 
include('footer.php');
include('js_files.php');
?>
</body>
</html>