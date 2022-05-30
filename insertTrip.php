<?php
require 'dbconnection.php';
extract($_POST);

if(isset($_POST['FromSend']) && isset($_POST['FirstStopSend']) && isset($_POST['SecondStopSend']) && isset($_POST['ToSend'])&& isset($_POST['DateSend'])){
    $sql = "insert into trips (Fromdestination,Firststop,Secondstop,Todestination,Dateandtime) values ('$FromSend','$FirstStopSend','$SecondStopSend','$ToSend','$DateSend')";
    $result = mysqli_query($conn,$sql);
}

?>