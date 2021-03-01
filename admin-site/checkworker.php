<?php

include_once("mysql-connection2.php");

$uid=$_GET["txtMobile"];

//$query="select * from users";

$query="select * from workersdata where mobile='$uid'";

$table=mysqli_query($dbcon,$query);

$ary=array();//declaration of array

while($row=mysqli_fetch_array($table))
{
	$ary[]=$row;//store rows in array
}

	$jsonAry=json_encode($ary);
	echo $jsonAry;



?>