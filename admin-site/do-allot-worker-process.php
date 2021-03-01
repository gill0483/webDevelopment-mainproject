<?php

include_once("mysql-connection2.php");
$cid=$_GET["cid"];
$wid=$_GET["wid"];
$query2="update complaints set status='alloted',workername='$wid' where serialno='$cid'";
$query3="select timeslot from complaints where serialno='$cid'";
$table2=mysqli_query($dbcon,$query2);
    //mysqli_query($dbcon,"ins");
$table3=mysqli_query($dbcon,$query3);


$ary=array();//declaration of array

while($row=mysqli_fetch_array($table3))
{
	$ary[]=$row;//store rows in array
}

	$jsonAry=json_encode($ary);
	$decode3=json_decode($jsonAry);
//echo $decode3;
$time=$decode3[0]->timeslot;
$query4="update workersdata set status=concat(status,' $time') where uid='$wid'";
mysqli_query($dbcon,$query4);

?> 