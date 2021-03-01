<?php

include_once("mysql-connection2.php");

	$mobile=$_POST["txtuid"];
    $complain=$_POST["combocomplain"];
	$modal=$_POST["modal"];
    $date=$_POST["purchase"];
    $expl=$_POST["explain"];
    $slot=$_POST["timeslot"];
    $ppic=$_FILES["bil"]["name"];
    $tmp=$_FILES["bil"]["tmp_name"];
    
    
    

	$query="insert into complaints (mobile,complain,modal,purchasedate,expalin,timeslot,ppic) values ('$mobile','$complain','$modal','$date','$expl','$slot','$ppic')";
	mysqli_query($dbcon,$query);
    //mysqli_query($dbcon,"ins");
	$msg=mysqli_error($dbcon);
if($msg=="")
{    move_uploaded_file($tmp,"uploads/".$ppic);
echo "Signed Up Successfully....";}

else
	echo $msg;


?>