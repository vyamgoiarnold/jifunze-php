<?php
$sever_name="localhost";
$username="root";
$password="";
$database_name="jifunzedb";

$con = mysqli_connect($sever_name, $username, $password, $database_name);

if(!$con){
    die("Connection Failed!");
}



?>