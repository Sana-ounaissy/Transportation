<?php
include 'dbconnection.php';



//to get details 
if(isset($_POST['updateid'])){

    $user_id = $_POST['updateid'];

    $sql = "select * from `passenger` where Passenger_ID=$user_id";
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

if(isset($_POST['updateInputEmailPs'])){
    $email = $_POST['updateInputEmailPs'];
    $fname = $_POST['updateInputFirstNamePs'];
    $lname = $_POST['updateInputLastNamePs'];
    $phonenb = $_POST[' updateInputPhoneNumberPs'];
    $dob = $_POST['updateInputBirthdayPs'];

    $sql= "update `passenger` set Firstname='$fname',Lastname='$lname', Email='$email', Phonenb='$phonenb', Dateofbirth='$dob' where Passenger_ID='1' ";
    $result = mysqli_query($conn,$sql);
}

//   updateInputFirstNamePs:updateInputFirstNameP,
//      updateInputLastNamePs:updateInputLastNameP,
//      updateInputPhoneNumberPs:updateInputPhoneNumberP,
//      updateInputBirthdayPs:updateInputBirthdayP

?>