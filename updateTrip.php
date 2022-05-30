<?php
require 'dbconnection.php';

//to get details 
if(isset($_POST['updateid'])){

    $tripid = $_POST['updateid'];

    $sql = "select * from `trips` where Trip_ID=$tripid";
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

    $sql= "update `trips` set Fromdestination='$From', Firststop='$FirstStop', Secondstop='$SecondStop', Todestination='$To', Dateandtime='$Date' where Trip_ID='$uniqueid' ";
    $result = mysqli_query($conn,$sql);
}

?>