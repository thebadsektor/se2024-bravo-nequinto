<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/Appointment_Service.css">
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
				<li><a href="Appointment_Booking_Staff.php">Select Staff</a></li>
				<li><a href="Appointment_Booking_Date.php">Select Date & Time</a></li>
				<li><a href="Appointment_Booking_Customer_Info.php">Your Info</a></li>
			</ul>
    </div>
    
		<div class="col-md-8" id="col8">
      <div class="row">
      <div class="col-md-6" id=col5>
			  <h4 style="color: black;">SELECT ONE OR MORE SERVICES</h4>
			  <div class="input-group">
          <input type="checkbox" name="check1">
          <label class="label control-label">Childrens Manicure (Age 10 and under)<br><span>1hr starting at Rs.1000.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check2">
          <label class="label control-label">Women eye care<br><span>1hr & 30min starting at Rs.570.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check3">
          <label class="label control-label">Delux Manicure<br><span>30min starting at Rs.970.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check4">
          <label class="label control-label">Gel Manicure<br><span>1hr starting at Rs.670.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check5">
          <label class="label control-label">Dipping Powder Manicuret<br><span>30minhr starting at Rs.800.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check6">
          <label class="label control-label">Gel Pedicure<br><span>1hr & 15min starting at Rs.750.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check1">
          <label class="label control-label">Classic Pedicure<br><span>30minhr starting at Rs.800.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check2">
          <label class="label control-label">Hair<br><span>1hr & 15min starting at Rs.750.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check3">
          <label class="label control-label">White hair coverage(Regrowth)<br><span>1hr & 30min starting at Rs.570.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check4">
          <label class="label control-label">Streaking<br><span>30minhr starting at Rs.800.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check5">
          <label class="label control-label">Deep conditioning Treatment<br><span>1hr starting at Rs.1000.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check6">
          <label class="label control-label">Perming/smoothing/ Rebonding<br><span>1hr & 30min starting at Rs.570.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check1">
          <label class="label control-label">keratin<br><span>30minhr starting at Rs.800.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check2">
          <label class="label control-label">Scalp massage with wash, dry and blowdry<br><span>1hr & 15min starting at Rs.750.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check3">
          <label class="label control-label">Morrocon oil treatment<br><span>1hr & 30min starting at Rs.570.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check4">
          <label class="label control-label">hair spa treatment with serum<br><span>30minhr starting at Rs.800.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check5">
          <label class="label control-label">Natural look hair extention<br><span>1hr starting at Rs.1000.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check6">
          <label class="label control-label">Hair extention  fashion colou<br><span>1hr & 15min starting at Rs.750.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check1">
          <label class="label control-label">Waxing Under Arm<br><span>30min starting at Rs.800.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check2">
          <label class="label control-label">Waxing Under Arm<br><span>1hr & 30min starting at Rs.570.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check3">
          <label class="label control-label">Waxing Full Arm<br><span>1hr starting at Rs.1000.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check4">
          <label class="label control-label">Waxing Half Arm<br><span>1hr & 15min starting at Rs.750.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check5">
          <label class="label control-label">Waxing Full Leg<br><span>1hr & 15min starting at Rs.750.00</span></label>
        </div>
        
       
      </div>		

      
      <div class="col-md-6" id=col5>
      <h4 class="text-center" style="color: white;">Select one or more services</h4>
      <div class="input-group">
          <input type="checkbox" name="check2">
          <label class="label control-label">Clean Up<br><span>30minhr starting at Rs.800.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check3">
          <label class="label control-label">Full Facial<br><span>1hr starting at Rs.1000.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check4">
          <label class="label control-label">Skin Lightening<br><span>1hr & 30min starting at Rs.570.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check5">
          <label class="label control-label">Eye Treatment<br><span>1hr starting at Rs.1000.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check6">
          <label class="label control-label">Back Treatment<br><span>30minhr starting at Rs.800.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check1">
          <label class="label control-label">Dressing-Saree Drape Only<br><span>1hr starting at Rs.1000.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check2">
          <label class="label control-label">Dressing with Hair Style<br><span>1hr & 30min starting at Rs.570.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check3">
          <label class="label control-label">Dressing with Make Up<br><span>30minhr starting at Rs.800.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check4">
          <label class="label control-label">One Nail Acrylac<br><span>1hr starting at Rs.1000.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check5">
          <label class="label control-label">Fill Only- Gel Nails<br><span>1hr & 15min starting at Rs.750.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check6">
          <label class="label control-label">Fill on Natural Nails<br><span>1hr & 30min starting at Rs.570.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check1">
          <label class="label control-label">Fill on Tips<br><span>30minhr starting at Rs.800.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check2">
          <label class="label control-label">Threading Forehead<br><span>30min starting at Rs.190.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check3">
          <label class="label control-label">Threading Upper Lips<br><span>30min starting at Rs.190.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check4">
          <label class="label control-label">Threading Eyebrows<br><span>30min starting at Rs.150.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check5">
          <label class="label control-label">Threading Cheecks<br><span>30min starting at Rs.150.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check6">
          <label class="label control-label">Threading Full Face<br><span>1hr starting at Rs.270.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check6">
          <label class="label control-label">Waxing Half leg<br><span>1hr starting at Rs.450.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check1">
          <label class="label control-label">Waxing Bikini Line<br><span>1hr starting at Rs.450.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check2">
          <label class="label control-label">Waxing Under Arm<br><span>1hr starting at Rs.370.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check3">
          <label class="label control-label">Waxing Full Body<br><span>1hr & 30min starting at Rs.770.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check4">
          <label class="label control-label">Threading Half Arm<br><span>1hr starting at Rs.250.00</span></label>
        </div>
        <div class="input-group">
          <input type="checkbox" name="check5">
          <label class="label control-label">Threading Full Leg<br><span>1hr starting at Rs.850.00</span></label>
        </div>
        <a href="Appointment_Stylist.php"><button class="btn btn-success" id="btn1">Continue..</button></a>
		  </div>		
  </div>
</div>
</div>
</div>



<?php include 'footer.php';  ?>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>   
</body>
</html>


     