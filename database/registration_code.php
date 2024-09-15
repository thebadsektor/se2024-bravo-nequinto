<?php
require_once('connection.php');
$fname= $lname = $gender = $email = $password = $pwd = '';

$fname = $_POST['firstname'];
$lname = $_POST['lasttname'];
$email = $_POST['email'];
$mobile = $_POST['mobileno'];
$gender = $_POST['gender'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql="INSERT INTO tbluser (Firstname, Lastname,Email,Mobileno,Gender,Password)
VALUES ('$fname','$lname','$email','$mobile','$gender','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
    header("Location: login.php");
}
else
{
    echo "Error :".sql;
}

?>
