<?php
require 'DBOpen.php';

$sql = "SELECT sum(Value) as TotalDonationReceived FROM DisasterRelief.Donations";
$result = mysqli_query($connect, $sql);
$TotalDonationReceived=mysqli_fetch_assoc($result)['TotalDonationReceived'];

echo $TotalDonationReceived;

require 'DBClose.php';
?>