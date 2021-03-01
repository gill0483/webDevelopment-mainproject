<?php

include_once("mysql-connection2.php");
$query2="select * from workersdata";

$table2=mysqli_query($dbcon,$query2);
    //mysqli_query($dbcon,"ins");

$ary2=array();//declaration of array

while($row2=mysqli_fetch_array($table2))
{
	$ary2[]=$row2;//store rows in array
}

	$jsonAry2=json_encode($ary2);
	//echo $jsonAry;
$decode2=json_decode($jsonAry2);
?>