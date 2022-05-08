<?php

$DB_USER = "root";
$DB_PASSWORD = "Santoshlatha08!";
$DB_DATABASE = "DisasterRelief";
$DB_HOST = "localhost";


$connect = mysqli_connect($DB_HOST, $DB_USER , $DB_PASSWORD);
  
if(! $connect ) 
{
    die('Could not connect: ' . mysqli_error($connect));
}
else
{	
	mysqli_select_db($connect, $DB_DATABASE);
}
?>