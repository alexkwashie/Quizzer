<?php
//Connnect to database
$db_host = 'localhost';
$db_name = 'Quizzer';
$db_user = 'root';
$db_password = 'root';

//Creat mysqli object
$mysqli = new mysqli($db_host,$db_user,$db_password,$db_name);

//Error Handler
if($mysqli->connect_error){
    printf("Connetion Failed: %s\n", $mysqli -> connect_error);
    exit();
}
?>