<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/Appointment_Stylist.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
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
				<li><a href="Appointment_Booking_Date.php">Select Date & Time</a></li>
				<li><a href="Appointment_Booking_Customer_Info.php">Your Info</a></li>
			</ul>
        </div>
    
		<div class="col-md-8" id="col8">
            <h4 style="color: black;">SELECT A STAFF MEMBER</h4>
            <div class="dotted">
                <p style="font-size:18px;">Looking for the first available Appointment?  Choose this option to see everyones availability.</p>
                <div class="form-group"> 
                <input type="button" onclick="location.href='Appointment_info.php'" name="loginsubmit" class="btn btn-default btn-primary" value="Book With Any Available">
                </div>
            </div>

      <div class="row">
        <div class="col-md-4" id=col5>
			<h3 class="text-center" style="color: white;">Select one or more services</h3>
            <h5>Manori Pieris</h5>
            <p>Main Beauticean</p>            
            <img src="images/ser1.jpg" alt="" style="width: 150px;;height: 150px; border-radius: 50%; align:center;">
            <div class="form-group"> 
                <input type="submit" name="loginsubmit" class="btn btn-default btn-success btn-sm" value="Book With Manori" style="margin-left:10px;">
                </div>
            </div>		

        <div class="col-md-4" id=col5>
            <h3 class="text-center" style="color: white;">Select one or more services</h3>
            <h5>Madhushi Nanayakkara</h5>
            <p>Beauticean</p>            
            <img src="images/ser2.jpg" alt="" style="width: 150px;;height: 150px; border-radius: 50%; align:center;">
            <div class="form-group"> 
                <input type="submit" name="loginsubmit" class="btn btn-default btn-success btn-sm" value="Book With Madhushi" style="margin-left:20px;">
                </div>
            </div>	

            <div class="col-md-4" id=col5>
			<h3 class="text-center" style="color: white;">Select one or more services</h3>
            <h5>Nishie Fernando</h5>
            <p>Beauticean</p>            
            <img src="images/ser3.jpg" alt="" style="width: 150px;;height: 150px; border-radius: 50%; align:center;">
            <div class="form-group"> 
                <input type="submit" name="loginsubmit" class="btn btn-default btn-success btn-sm" value="Book With Nishie" style="margin-left:20px;">
                </div>
            </div>


            <div class="row">
        <div class="col-md-4" id=col5>
			<h3 class="text-center" style="color: white;">Select one or more services</h3>
            <h5>Ashini Heenatigala</h5>
            <p>Beauticean</p>            
            <img src="images/ser4.jpg" alt="" style="width: 150px;;height: 150px; border-radius: 50%; align:center;">
            <div class="form-group"> 
                <input type="submit" name="loginsubmit" class="btn btn-default btn-success btn-sm" value="Book With Ashini" style="margin-left:10px;">
                </div>
            </div>		

        <div class="col-md-4" id=col5>
            <h3 class="text-center" style="color: white;">Select one or more services</h3>
            <h5>Roshana Pieris</h5>
            <p>Hair Stylist</p>            
            <img src="images/ser5.jpg" alt="" style="width: 150px;;height: 150px; border-radius: 50%; align:center;">
            <div class="form-group"> 
                <input type="submit" name="loginsubmit" class="btn btn-default btn-success btn-sm" value="Book With Roshana" style="margin-left:20px;">
                </div>
            </div>	


            <div class="col-md-4" id=col5>
            <div class="row">
            <div class="col-md-6" id=col5>	
            <div class="form-group"> 
                <input type="button" onclick="location.href='Appointment_service.php'" name="loginsubmit" class="btn btn-default btn-primary" value="Back" style="margin-top:290px; ">
                </div>
            </div>

            <div class="col-md-6" id=col5>
            <div class="form-group"> 
                <input type="button" onclick="location.href='beauticians.php'" name="loginsubmit" class="btn btn-default btn-primary " value="More Info" style="margin-top:290px;">
                </div>
            </div>
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


     