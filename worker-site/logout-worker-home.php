<?php

include_once("mysql-connection2.php");
session_start();
session_unset();
header("location:worker-login.php");

?>