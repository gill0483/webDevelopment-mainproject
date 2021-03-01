<?php

include_once("mysql-connection2.php");

	$fname=$_POST["txtfname"];
    $lname=$_POST["txtlname"];
	$pwd=$_POST["txtpwd"];
	$email=$_POST["txtemail"];
    $mobile=$_POST["txtmobile"];
    $securityq=$_POST["comboq"];
    $securitya=$_POST["comboa"];
    

	$query="insert into customerdata (fname,lname,pwd,email,mobile,securityq,securitya) values('$fname','$lname','$pwd','$email','$mobile','$securityq','$securitya')";
	mysqli_query($dbcon,$query);
    //mysqli_query($dbcon,"ins");
	$msg=mysqli_error($dbcon);
if($msg=="")
echo "Signed Up Successfully....";

else
	echo $msg;


?>