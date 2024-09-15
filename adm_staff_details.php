<?php
include 'adm_staff_action.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Crud</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>

</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
    <div class="bg-light col-md-6 mt-3 p-4 rounded">
    <h4 class="bg-info p-2 rounded text-center text-light">Details of ID No : <?=$vid; ?></h4>
    <div class="text-center">
    <img src="<?=$vphoto; ?>" width="600" height="600" class="img-thumbnail" style ="margin-bottom:30px; margin-top:30px;">
    </div>
    <h6 class="text-dark">Employee Name : <?=$vname; ?> </h6>
    <h6 class="text-dark">Email Address : <?=$vemail; ?> </6>
    <h6 class="text-dark">Mobile No      : <?=$vphone; ?> </6>
    <h6 class="text-dark">role of the Employee : <?=$vrole; ?> </h6>

    </div>
       </div>
       </div>
       
            </body>
            </html>