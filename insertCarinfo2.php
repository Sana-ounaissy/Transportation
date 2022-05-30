<?php
include 'dbconnection.php';
extract($_POST);

if(isset($_POST['_wifiSend']) && isset($_POST['_acSend']) && isset($_POST['_nbseatsSend']) && isset($_POST['_TypeSend'])){
    $sql = "insert into vehicle (Wifi,AC,Nbseats,Type) values ('$_wifiSend','$_acSend','$_nbseatsSend','$_TypeSend')";
    $result = mysqli_query($conn,$sql);
}

?>