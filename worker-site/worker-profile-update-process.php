<?php

include_once("mysql-connection2.php");

	$name=$_POST["txtname"];
	$email=$_POST["txtemail"];
    $address=$_POST["txtaddr"];
    $addar=$_POST["txtaddar"];
    $city=$_POST["combocity"];
    $mobile=$_POST["txtmobile"];
    //$landmark=$_POST["txtlandmark"];
    $ppic=$_FILES["ppic"]["name"];
    $tmp=$_FILES["ppic"]["tmp_name"];
    
   if($ppic=="")
   {$query="update workersdata set name='$name',email='$email',addar='$addar',address='$address',city='$city',mobile='$mobile' where mobile='$mobile'";}
   else   
   {$query="update workersdata set name='$name',email='$email',addar='$addar',address='$address',city='$city',mobile='$mobile',ppic='$ppic' where mobile='$mobile' ";
    move_uploaded_file($tmp,"../uploads/".$ppic);
   }
	mysqli_query($dbcon,$query);
    //mysqli_query($dbcon,"ins");
	$msg=mysqli_error($dbcon);
if($msg=="")
{echo "updated";

}
else
echo $msg;



?>