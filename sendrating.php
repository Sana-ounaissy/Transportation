<?php
include 'dbconnection.php';
extract($_POST);

if(isset($_POST['driverid']) && isset($_POST['ratingadd'])){
    $sql = "update driver set Rating='$ratingadd' where Driver_ID='$driverid'";
    $result = mysqli_query($conn,$sql);
}

?>