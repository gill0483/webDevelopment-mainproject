<?php

include_once("mysql-connection2.php");



$query="select * from customerdata";



$table=mysqli_query($dbcon,$query);

$ary=array();//declaration of array

while($row=mysqli_fetch_array($table))
{
	$ary[]=$row;//store rows in array
}

	$jsonAry=json_encode($ary);
	echo $jsonAry;


?>