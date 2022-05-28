<?php
include 'dbconnection.php';
extract($_POST);

if(isset($_POST['_ContactNameSend']) && isset($_POST['_ContactEmailSend']) && isset($_POST['_ContactSubjectSend']) && isset($_POST['_ContactMessageSend'])){
    $sql = "insert into contactus (Messages,Email,name,subject) values ('$_ContactMessageSend','$_ContactEmailSend','$_ContactNameSend','$_ContactSubjectSend')";
    $result = mysqli_query($conn,$sql);
}

?>