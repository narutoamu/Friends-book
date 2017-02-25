
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles/profile.css">
</head>
<body>





<?php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'world1'); 
   define('DB_USER','root'); 
   define('DB_PASSWORD',''); 
   $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
   $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

     if(!empty($_GET['pro']))
	  {  
      $profile_id=$_GET['pro'];
       if(isset($_POST['insert_post']))
	  {
		  $user_image=$_FILES['user_image']['name'];
	      $user_image_tmp=$_FILES['user_image']['tmp_name'];
		  move_uploaded_file($user_image_tmp,"user_images/$user_image");
          $insert="UPDATE websiteuser SET user_image='$user_image' WHERE userID='$profile_id'"; 
		  $data=mysql_query($insert)or die("tgyuvcshb".mysql_error()); 
	
	  }
	  
      $query=mysql_query("SELECT * FROM websiteuser WHERE userID='$profile_id'");
      $row = mysql_fetch_array($query) or die(mysql_error());
	 if(!empty($row['userName']) AND !empty($row['pass'])) 
      { 
      
       $pro_id=$row['userID'];
	   $pro_name=$row['fullname'];
	   $pro_email=$row['email'];
	   $pro_user=$row['userName'];
	   $pro_image=$row['user_image'];
	   echo "<h1>$pro_name</h1>";
       if(!empty($pro_image))
	   {
		   echo "<span><img class='img-circle' src='user_images/$pro_image' alt=''/></span>";
	   }
	  else
	    { 
           echo "<span><img class='img-circle' src='user_images/images.png' height='200' width='240'/></span>";}
			   
        } 		
           echo "<div align='center'>
		    	<form action='profile.php?pro=$profile_id' method='POST' enctype='multipart/form-data'>
			    <input type='file' name='user_image' />
			    <input type='submit' name='insert_post' value='upload'>
			    </form>
			    </div>" ;	
           echo "<h2>Email:
		           <br>$pro_email</h2>
		         <h2>Username:
				 <br>$pro_user</h2>
                 <h2>Contact no:
				 <br>9319062191</h2>	
				 <h2>Aboutme:
				 <br>Developer , Food lover , Swimmer
				 </h2>";				 
       				
	  }
		  
	 ?>
	 </body>
	 </html>