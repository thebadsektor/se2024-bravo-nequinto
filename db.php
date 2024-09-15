<?php
$connect=mysqli_connect('localhost', 'root', '', 'salondb');

if($connect){
    echo 'SUCCESS';
}else{
    echo"FAILED"
}
?>