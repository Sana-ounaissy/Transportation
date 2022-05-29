<?php
require 'dbconnection.php';

//to get details 
if(isset($_POST['updateid'])){

    $user_id = $_POST['updateid'];

    $sql = "select * from `trips` where Trip_ID=$user_id";
    $result = mysqli_query($conn,$sql);
    $response = array();
    while($row=mysqli_fetch_assoc($result)){
        $response = $row;
    }
    echo json_encode($response);

}
else{
    $response['status']=200;
    $response['message']="invalid or data not found";
}

//update query
if(isset($_POST['hiddendata'])){
    $uniqueid = $_POST['hiddendata'];
    $From = $_POST['updateFrom'];
    $FirstStop = $_POST['updateFirstStop'];
    $SecondStop = $_POST['updateSecondStop'];
    $To = $_POST['updateTo'];
    $Date = $_POST['updateDate'];

    $sql= "update `trips` set From='$From', Firststop='$FirstStop', Secondstop='$SecondStop', To='$To', Dateandtime='$Date' where Trip_ID='$uniqueid' ";
    $result = mysqli_query($conn,$sql);
}

?>