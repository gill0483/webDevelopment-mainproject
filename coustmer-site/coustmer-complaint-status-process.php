<?php

include_once("mysql-connection2.php");



$query="select * from complaints where mobile='$uid'";

$table=mysqli_query($dbcon,$query);
    //mysqli_query($dbcon,"ins");

$ary=array();//declaration of array

while($row=mysqli_fetch_array($table))
{
	$ary[]=$row;//store rows in array
}

	$jsonAry=json_encode($ary);
	//echo $jsonAry;
$decode=json_decode($jsonAry);
?>