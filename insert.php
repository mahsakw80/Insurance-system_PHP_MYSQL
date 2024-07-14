<?php
include("conf.php");
include("navbar.php");
$fname=$_POST['first'];
$lname=$_POST['last'];
$fn=$_POST['fathern'];
$nc=$_POST['ncode'];
$phn=$_POST['phonen'];
$ip=$_POST['ip'];
$ad=$_POST['ad'];
$gn=$_POST['gender'];


$sql="INSERT INTO users (firstname,lastname,fathersName,NationalCode,gender,phoneNumber,addres,Insurance_period) VALUES ('$fname','$lname','$fn','$nc','$gn','$phn','$ad','$ip')";
if(mysqli_query($conn,$sql)){
    echo"New record created successfully";
}else{
    echo"Error : ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>