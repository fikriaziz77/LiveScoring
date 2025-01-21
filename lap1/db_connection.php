<?php
$server = "localhost";
$user = "root";
$pass = "";
// create database first
$database = "score_board"; 
$con = mysqli_connect(hostname: $server, username: $user, password: $pass);
if(!$con){
    echo 'Server not connected';
}
$db = mysqli_select_db(mysql: $con, database: $database);
if(!$db){
    echo 'Database not connected';
}
?>