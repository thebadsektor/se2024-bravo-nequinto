<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/Appointment_User.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <title>Login</title>
</head>
<body>
<?php include 'navbar.php';  ?>

   <div class="container">
   	 <form name="login" action="#"><!-- action="#"-database eka connect karana -->
   	   <div class="row">
		  <div class="col-md-3"></div>
   	   	  <div class="col-md-5">	

                   <h4 class="text-center">NEW OR EXISTING USER?</h4>
                  
   	   	<div class="row">
   	   	  <div class="col-md-6">
                <div class="img-border">
                <a href="login.php">
        <img src="images/app1.png" class="img-fluid" alt="" style="width:170px;height:170px;">
</a>
        <caption>Existing User</caption>
        
</div>
        </div>  

<div class="col-md-6">
    <div class="img-border">
    <a href="register.php">
    <img src="images/app2.png" class="img-fluid" alt="" style="width:170px;height:170px;">
</a>
    <caption style="font-color:black;">New User</caption>
    
</a>              
</div>
</div>

<div class="col-md-3"></div>
         </div>
</div>
</div>

<div class="row">
<div class="col-md-2"></div>
<div class="col-md-7">
<span class="label primary"><small>Your Appointment is Temporarily Saved and it Will be Booked After You Login or Sign Up</small></span>
</div>
<div class="col-md-2"></div>
         </div>


         <div class="row">
<div class="col-md-2"></div>
<div class="col-md-7">
    <div class="row">
        <div class="col-md-6">
<input type="button" onclick="location.href='Appointment_info.php'" name="loginsubmit" class="btn btn-default btn-sm btn-primary" value="Back">
        </div>
        <div class="col-md-6">
<input type="submit" name="loginsubmit" class="btn btn-default btn-sm btn-primary" value="Cancel">
        </div>
    </div>
</div>
<div class="col-md-2"></div>
         </div>

                   
<div class="row">
<div class="col-md-3"></div>
         </div>
    
</div>
   	   	      
   	   	      </div> 
   	   	      
   	   	      	 	
			  </div>
				
   	  </form>
   </div>

    <script src="js/bootstrap.js"></script>    
    <script src="js/loginjs.js"></script>    

</body>
</html>