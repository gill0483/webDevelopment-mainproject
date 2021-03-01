<?php

	include_once("mysql-connection2.php");

	$name=$_POST["txtname"];
	$email=$_POST["txtemail"];
	$addar=$_POST["txtaddar"];
    $addr=$_POST["txtAddr"];
    $city=$_POST["comboCity"];
    $mobile=$_POST["txtMobile"];
    $exp=$_POST["comboexp"];
    $spl=$_POST["txtspl"];
    $ppic=$_FILES["ppic"]["name"];
    $tmp=$_FILES["ppic"]["tmp_name"];
    
    

	$query="insert into workersdata (pwd,name,email,addar,address,city,mobile,experience,speciality,ppic) values ('$name','$name','$email','$addar','$addr','$city','$mobile','$exp','$spl','$ppic')";
	mysqli_query($dbcon,$query);
    //mysqli_query($dbcon,"ins");
	$msg=mysqli_error($dbcon);
if($msg=="")
{echo "Signed Up Successfully....";
  move_uploaded_file($tmp,"uploads/".$ppic);
}
else
	echo $msg;



?>