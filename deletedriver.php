<?php
require 'dbconnection.php';

if(isset($_POST['deletesend'])){
    $unique=$_POST['deletesend'];

    $sql="delete from driver where Trip_ID=$unique";
    $result=mysqli_query($conn,$sql);
}

?>