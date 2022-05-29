<?php
require 'dbconnection.php';
extract($_POST);

if(isset($_POST['FromSend']) && isset($_POST['FirstStopSend']) && isset($_POST['SecondStopSend']) && isset($_POST['ToSend'])&& isset($_POST['DateSend'])){
    $sql = "insert into `trips` (From,Firststop,Secondstop,To,Dateandtime) values ('$FromSend','$FirstStopSend','$SeconStopSend','$ToSend','$DateSend')";
    $result = mysqli_query($conn,$sql);
}

?>