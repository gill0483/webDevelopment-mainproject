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
    
   if($ppic=="")
   {$query="update workersdata set pwd='$name',name='$name',email='$email',addar='$addar',address='$addr',city='$city',mobile='$mobile',experience='$exp',speciality='$spl' where mobile='$mobile'";}
   else   
   {$query="update workersdata set pwd='$name',name='$name',email='$email',addar='$addar',address='$addr',city='$city',mobile='$mobile',experience='$exp',speciality='$spl',ppic='$ppic' where mobile='$mobile'";
    move_uploaded_file($tmp,"uploads/".ppic);
   }
	mysqli_query($dbcon,$query);
    //mysqli_query($dbcon,"ins");
	$msg=mysqli_error($dbcon);
//if($msg=="")
//{echo "updated";

//}
//else
	//echo $msg;



?>