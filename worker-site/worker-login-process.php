<?php

include_once("mysql-connection2.php");
session_start();
$txtuid=$_GET["txtuid"];
$txtpwd=$_GET["txtpwd"];

$query="select * from workersdata where email='$txtuid' and pwd='$txtpwd'";

$table=mysqli_query($dbcon,$query);
    //mysqli_query($dbcon,"ins");

$row=mysqli_num_rows($table);

$_SESSION["txtuid"]=$txtuid;
$_SESSION["txtpwd"]=$txtpwd;

if($row==1)
echo "correct";
else
    echo "wrong";

?>