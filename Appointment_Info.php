<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/Appointment_Info.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <title>Appointment Booking Select Service</title>
</head>
<body style="background-size: cover;">
<?php include 'navbar.php';  ?>
<div class="container-fluid">

	<div class="row">
		<div class="col-md-3" id="col3">
    <img id="img" src="images/logo.png" style="width: 200px;;height: 190px; border-radius: 10%; align:center;">
			<ul class="book">
				<li><a id="active" href="Appointment_Booking_Service.php">Select Service</a></li>
				<li><a id="active" href="Appointment_Booking_Staff.php">Select Staff Member</a></li>
				<li><a id="active" href="Appointment_Booking_Date.php">Select Date & Time</a></li>
				<li><a id="active" href="Appointment_Booking_Customer_Info.php">Your Info</a></li>
			</ul>
        </div>
    
		<div class="col-md-8" id="col8">
            
            <h4 style="color: black;">YOUR INFO</h4>
            <h5 style="color: black;">Great, now just enter your contact details.</h5><br><br>

      <div class="row">
        <div class="col-md-6" id=col5>

        <label style="font-size: 18px"class="label control-label">First Name</label>
   	   	    <div class="input-group">
   	   	 	<span class="input-group-addon"><i class="fas fa-user" style="font-size: 21px"></i></span>
   	   	 	<input style="font-size: 18px" type="text" class="form-control" name="username" placeholder="First Name" required>
            <p class="nameErr"></p>
            </div>
            </div>

            <div class="col-md-6" id=col5>
        <label style="font-size: 18px"class="label control-label">Last Name</label>
   	   	    <div class="input-group">
   	   	 	<span class="input-group-addon"><i class="fas fa-user" style="font-size: 21px"></i></span>
   	   	 	<input style="font-size: 18px" type="text" class="form-control" name="username" placeholder="Last Name" required>
            <p class="nameErr"></p>
            </div>
            </div>
            </div>

            <div class="row">
        <div class="col-md-6" id=col5>

        <label style="font-size: 18px"class="label control-label">Mobile Phone</label>
   	   	    <div class="input-group">
   	   	 	<span class="input-group-addon"><i class="fas fa-phone" style="font-size: 21px"></i></span>
   	   	 	<input style="font-size: 18px" type="tel" class="form-control" name="username" placeholder="Mobile No" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
            <p class="nameErr"></p>
            </div>
            </div>

            <div class="col-md-6" id=col5>
        <label style="font-size: 18px"class="label control-label">Email</label>
   	   	    <div class="input-group">
   	   	 	<span class="input-group-addon"><i class="fas fa-envelope" style="font-size: 21px"></i></span>
   	   	 	<input style="font-size: 18px" type="email" class="form-control" name="username" placeholder="E-mail" required>
            <p class="nameErr"></p>
            </div>
            </div>
            </div>

            <label style="font-size: 18px"class="label control-label">Appointment Notes(Optional)</label>
   	   	    <div class="input-group">
   	   	 	<span class="input-group-addon"><i class="fas fa-sticky-note" style="font-size: 21px"></i></span>
   	   	 	<textarea style="font-size: 18px" type="text" class="form-control" name="username" placeholder="Add a note to your appointment. To protect your privacy,do not include any priviledged material such as personal health information."></textarea>
            <p class="nameErr"></p>
            </div>

            <input type="checkbox"><small>&nbsp I have read and agree to the <a href="#">cancellation policy</a> and <a href="#">privacy policy</a> of Salon Manori</small>
        
            <div class="form-group"> 
   	   	      <input type="button" onclick="location.href='Appointment_user.php'" name="loginsubmit" class="btn btn-default btn-sm btn-primary" value="Book Now">
                    </div>
                    
            <p style="font-size:16px;">By creating this appointment, you agree to recieve automated text from Salon Manori.</p>

        

      
        


    </div>		
  </div>
</div>
</div>
</div>
</div>


<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>   
</body>
</html>


     