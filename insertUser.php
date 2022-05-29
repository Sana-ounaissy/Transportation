<?php

include 'dbconnection.php';
extract($_POST);
if ($_POST['_SelectTypeSend']=='Driver'){
   if(isset($_POST['_FirstNameSend']) && isset($_POST['_LastNameSend']) && isset($_POST['_BirthdaySend']) && isset($_POST['_GenderSend'])&& isset($_POST['_EmailSend'])&& isset($_POST['_PhoneNumberSend'])&& isset($_POST['_PasswordSend'])&&($_POST['_SelectTypeSend'])){
    $sql = "insert into driver (Firstname,Lastname,Dateofbirth,Email,Passward,Gender,Phonenb) values ('$_FirstNameSend','$_LastNameSend','$_BirthdaySend','$_EmailSend','$_PasswordSend','$_GenderSend','$_PhoneNumberSend')";
    $result = mysqli_query($conn,$sql);
}

  }
else{
    if(isset($_POST['_FirstNameSend']) && isset($_POST['_LastNameSend']) && isset($_POST['_BirthdaySend']) && isset($_POST['_GenderSend'])&& isset($_POST['_EmailSend'])&& isset($_POST['_PhoneNumberSend'])&& isset($_POST['_PasswordSend'])&&($_POST['_SelectTypeSend'])){
        $sql1 = "insert into passenger (Firstname,Lastname,Dateofbirth,Email,Passward,Gender,Phonenb) values ('$_FirstNameSend','$_LastNameSend','$_BirthdaySend','$_EmailSend','$_PasswordSend','$_GenderSend','$_PhoneNumberSend')";
        $result1 = mysqli_query($conn,$sql1);
}
}
?>


