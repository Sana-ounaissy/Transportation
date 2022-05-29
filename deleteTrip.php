<?php
require 'dbconnection.php';

if(isset($_POST['deletesend'])){
    $unique=$_POST['deletesend'];

    $sql="delete from `trips` where Trip_ID=$unique";
    $result=mysqli_query($conn,$sql);
}

?>