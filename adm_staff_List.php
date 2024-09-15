<?php
include 'adm_staff_action.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Details</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/x.css">
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

    <div class="row" style="background: #e6e6ff; margin-bottom:22px;">
     <div class="col-md-9">
     <h2 class="text-center text-info" style="margin-top: 12px;" > Employee Details</h2>
     </div>
     <div class="col-md-3">
         <div class= "form-group">
            <a href="adm_staff_add.php">
            <input type="submit" name="add" class="btn btn-primary btn-block" style="margin-top: 12px; margin-bottom: 12px;" value="Add Employee"></a>   
        </div>
     </div> 
    </div>
    <div class="row">  
   <div class="col-md-10 mx-auto">

                <!-- To pass the data to the displaying table -->
                <?php
                $query="SELECT * FROM staff";
                $stmt=$conn->prepare($query);
                $stmt->execute();
                $result=$stmt->get_result();
                ?>

            
             <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Action</th>
                
                </tr>
                </thead>
                <tbody>

                <!-- To pass the data to the displaying table -->
                    <?php while($row=$result->fetch_assoc()){ ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><img src="<?= $row['photo']; ?>" alt="" width="25"></td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['phone']; ?></td>
                    <td><?= $row['role']; ?></td>
                    <td>

                    <a href="adm_staff_details.php?details=<?= $row['id']; ?>" class="badge badge-primary p-2">Details</a> |
                    <a href="adm_staff_action.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Do you want to delete this record?');">Delete</a> |
                    <a href="adm_staff_add.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2">Edit</a>
                    </td>
                </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
       </div>
    </div>
</body>
</html>

