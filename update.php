<?php
session_start();
include("conf.php");
include("navbar.php");
$fname2=$_POST['first2'];
$lname2=$_POST['last2'];
$fn2=$_POST['fathern2'];
$nc2=$_POST['ncode2'];
$phn2=$_POST['phonen2'];
$ip2=$_POST['ip2'];
$ad2=$_POST['ad2'];
$gn2=$_POST['gender2'];
$userid=$_SESSION['ID'];



$star=false;
$res="";

if($fname2!=""){
  if($star==false){
    $res=$res."firstname='$fname2'";
    $star=true;
  }else{$res=$res.",ftirsname='$fname2'";}
}
if($lname2!=""){
  if($star==false){
    $res=$res."lastname='$lname2'";
    $star=true;
  }else{$res=$res.",lastname='$lname2'";}
}
if($fn2!=""){
  if($star==false){
    $res=$res."fathersName='$fn2'";
    $star=true;
  }else{$res=$res.",fathersName='$fn2'";}
}
if($nc2!=""){
  if($star==false){
    $res=$res."NationalCode='$nc2'";
    $star=true;
  }else{$res=$res.",NationalCode='$nc2'";}
}
if($phn2!=""){
  if($star==false){
    $res=$res."phoneNumber='$phn2'";
    $star=true;
  }else{$res=$res.",phoneNumber='$phn2'";}
}
if($ip2!=""){
  if($star==false){
    $res=$res."Insurance_period='$ip2'";
    $star=true;
  }else{$res=$res.",Insurance_period='$ip2'";}
}
if($ad2!=""){
  if($star==false){
    $res=$res."addres='$ad2'";
    $star=true;
  }else{$res=$res.",addres='$ad2'";}
}
if($gn2!="..."){
  if($star==false){
    $res=$res."gender='$gn2'";
    $star=true;
  }else{$res=$res.",gender='$gn2'";}
}

$sql = "UPDATE users SET ".$res." WHERE id='$userid'";

//$sql = "UPDATE users SET firstname='$fname2',lastname='$lname2',fathersName='$fn2',NationalCode='$nc2',gender='$gn2',
//phoneNumber='$phn2',addres='$ad2',Insurance_period='$ip2' WHERE id='$userid'";

    

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);






?>