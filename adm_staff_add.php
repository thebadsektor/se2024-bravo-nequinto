<?php
include 'adm_staff_action.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Add Staff</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>

</head>
<body>
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <hr>
    <?php if(isset($_SESSION['response'])){ ?>
            <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
                <?php header("refresh:4, url = adm_staff_list.php");?>
                <button type="button" class="close" data-dismiss="alert" >&times;</button>  
                <b><?= $_SESSION['response']; ?></b>          
            </div>
            <?php } unset($_SESSION['response']); ?>
            </div>
            </div>

            <div class="row">
            <div class="col-md-4 mx-auto">
            <h3 class="text-center text-info"> Add Employee Details </h3>
            <form action="adm_staff_action.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$id; ?>" >
                <div class= "form-group">
                    <input type="text" name="name" value="<?=$name; ?>" class="form-control" placeholder="Enter name" required>
                </div>
                <div class= "form-group">
                    <input type="email" name="email" value="<?=$email; ?>" class="form-control" placeholder="Enter email">
                </div>
                <div class= "form-group">
                    <input type="tel" name="phone" value="<?=$phone; ?>" class="form-control" placeholder="Enter Phone">
                </div>
                <div class= "form-group">
                    <input type="text" name="role" value="<?=$role; ?>" class="form-control" placeholder="Enter role">
                </div>
                <div class= "form-group">
                    <input type="hidden" name="oldimage" value="<?=$photo; ?>" >    
                    <input type="file" name="image" class="custom-file" >
                    <img src="<?= $photo; ?>" width="120" class="img-thumbnail">
                </div> 
                <div class= "form-group">
                    <?php if($update==true){ ?>
                        <input type="submit" name="update" class="btn btn-success btn-block" value="Update Record">
                    <?php }  else{ ?>
                        <input type="submit" name="add" class="btn btn-primary btn-block" value="Add Record">
                    <?php } ?>    
                </div>
            </form>
            </div>
         
        </div>
    </div>

</body>

</html>