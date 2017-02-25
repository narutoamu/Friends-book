<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<link rel="stylesheet" href="web/css/style.css">
	<link href="web/css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Sign In And Sign Up Forms  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	</script><script src="web/js/jquery.min.js"></script>
<script src="web/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script type="text/javascript" src="web/js/modernizr.custom.53451.js"></script> 
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
</script>	
		
</head>
<body>
	<h1>Friendsbook</h1>
	<div class="w3layouts">
		<div class="signin-agile">
			<h2>Sign In</h2>
			<form action="conn2.php" method="post">
				<input type="text" name="user" class="name" placeholder="Username" required="">
				<input type="password" name="pass" class="password" placeholder="Password" required="">
				
				<a href="#">Forgot Password?</a><br>
				<div class="clear"></div>
				<input type="submit" value="Login">
			</form>
		</div>
		<div class="signup-agileinfo">
			<h3>Sign Up</h3>
			<p> <img height="200px"src="web/images/friends.svg"></p>
			<div class="more">
				<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">Sign Up</a>				
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="footer-w3l">
	
	</div>
	<div class="pop-up"> 
	<div id="small-dialog" class="mfp-hide book-form">
		<h3>Sign Up Here! </h3>
			<form action="index.php" method="POST">
				<input type="text" name="name" placeholder="Your Name" required=""/>
				<input type="text" name="user" placeholder="User Name" required=""/>
				<input type="text" name="email" class="email" placeholder="Email" required=""/>
				<input type="password" name="pass" class="password" placeholder="Password" required=""/>
				<input type="password" name="cpass" class="password" placeholder="Confirm Password" required=""/>					
				<input type="submit" value="Sign Up">
			</form>
	</div>
</div>	
<body>
</html>
<?php
define('DB_HOST','localhost');
define('DB_NAME','world1');
define('DB_USER','root');
define('DB_PASSWORD','');
echo "Ass hole";
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD)or die("Failed to connect to MYSQL:".mysql_error());
$db=mysql_select_db(DB_NAME,$con)or die("Failed to connect to MYSQL:".mysql_error());

function NewUser()
{
	$fullname=$_POST['name'];
	$username=$_POST['user'];
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$cpassword=$_POST['cpass'];
	
	if($password!=$cpassword)
	  echo "<script>alert('Password mismatch');</script>";
	  else
	  {
		  $query="INSERT INTO websiteuser(fullname,userName,email,pass) VALUES ('$fullname','$username','$email','$password')" ;
    $data=mysql_query($query)or die("tgyuvcshb".mysql_error()); 
	   if($data)
	    {
		echo "<script>alert('your Registered');</script>";
		
     	}
	  }
}

		if(!empty($_POST['user']))
		{		
	       $query=mysql_query("SELECT * FROM websiteuser WHERE userName='$_POST[user]'");
   
           if(!$row=mysql_fetch_array($query))
              {
	
	          newuser();
              }
           else
           {
	         echo "<script>alert('Sorry... this username already exist...');</script>";
           } 

		
	}
		

?>