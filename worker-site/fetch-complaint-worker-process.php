<?php

include_once("mysql-connection2.php");


$query5=" select * from complaints where uid="$arr[0]->uid" ";

$table5=mysqli_query($dbcon,$query5);
    //mysqli_query($dbcon,"ins");

$ary5=array();//declaration of array

$row5=mysqli_fetch_array($table5);
	$ary5[]=$row;//store rows in array



	$jsonAry5=json_encode($ary5);
	 
$arr5=json_decode($jsonAry5);


$query6=" select * from coustmerdata where mobile="$arr[0]->mobile" ";

$table6=mysqli_query($dbcon,$query6);
    //mysqli_query($dbcon,"ins");

$ary6=array();//declaration of array

$row6=mysqli_fetch_array($table6);
	$ary6[]=$row;//store rows in array



	$jsonAry6=json_encode($ary6);
	 
$arr6=json_decode($jsonAry6);



?>
