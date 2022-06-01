<?php
include 'dbconnection.php';
extract($_POST);

if(isset($_POST['sessionsend']) && isset($_POST['messagesend'])){
    $sql = "insert into messages_driver (Driver_Email,Message) values ('$sessionsend','$messagesend')";
    $result = mysqli_query($conn,$sql);
}

?>