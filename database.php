<?php
//creating connection
$db_host = 'localhost';
$db_name = 'quizzer';
$db_user = 'root';
$db_password = 'password';

//create mysqli object
$mysqli=new mysqli($db_host,$db_user,$db_password,$db_name);

//error handle
if($mysqli->connect_error)
{
    printf("connect failed : %s \n",$mysqli->connect_error);
    exit();
}
?>
