<?php
require 'DBOpen.php';

$value=$_POST['value'];

$sql = "INSERT INTO DisasterRelief.Donations (Value) values(".$value.");";
$result = mysqli_query($connect, $sql);

require 'DBClose.php';
?>