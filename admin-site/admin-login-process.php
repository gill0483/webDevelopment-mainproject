<?php

include_once("mysql-connection2.php");

$txtuid=$_GET["txtuid"];
$txtpwd=$_GET["txtpwd"];

$query="select * from admin where uid='$txtuid' and pwd='$txtpwd'";

$table=mysqli_query($dbcon,$query);
    //mysqli_query($dbcon,"ins");

$row=mysqli_num_rows($table);

if($row==1)
echo "correct";
else
    echo "wrong";

?>