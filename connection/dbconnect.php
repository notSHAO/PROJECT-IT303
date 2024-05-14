<?php
$db_server="localhost";
$db_username="root";
$db_password="";
$db_database="apartneardb";

$connect = mysqli_connect($db_server,$db_username,$db_password,$db_database);

if(!$connect){
   die("connection failed" . mysqli_error());
}
?> 