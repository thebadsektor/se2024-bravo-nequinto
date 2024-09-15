<?php

include 'dbconnection.php';

$conn = OpenCon();

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "INSERT INTO customer_register(username,password) VALUES ('$user','$pass')";

if ($conn->query($sql) ===TRUE) 
{
	if($user=='')
  {
	echo "<script>alert('Please enter Username')</script>";
  }
  else if($pass=='')
  {
	echo "<script>alert('Please enter Password')</script>";
  }
  else
  {
  	echo "<script>alert('Registration successfully !')</script>";
  	header("refresh:2, url = login.php");
  }

}
else{
	echo "error:".$sql."<br>".$conn->error;
}

CloseCon($conn);

?>


