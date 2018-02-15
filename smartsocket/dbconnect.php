<?php
$dbserver_name="localhost";
$dbuser="bbsm";
$dbpassword="bbsm";
$dbname="smartpowerstrip";
$dbtable_name="iotusers";

$mysqli=new mysqli($dbserver_name,$dbuser,$dbpassword,$dbname) or die($mysqli->error);

?>