<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "test_transportation");

// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }
  else if($_POST["action"] == "login"){
    login();
  }
}

// REGISTER
function register(){
  global $conn;

  $FirstName = $_POST["FirstName"];
  $Lastname = $_POST["LastName"];
  $Birthday = $_POST["Birthday"];
  $Gender =$_POST["Gender"];
//   $Male = $_POST["Male"];
//   $Female=$_POST["Female"];       
  $Email=$_POST["Email"];
  $Password=$_POST["Password"]; 
  $SelectType=$_POST["SelectType"];        
  $PhoneNumber=$_POST["PhoneNumber"];      
         
        
  if(empty($FirstName) || empty($Lastname) || empty($Birthday) ||  empty(Gender) || empty($Email) || empty($Password) ||empty($SelectType) ){
    echo "Please Fill Out The Form!";
    exit;
  }
if($SelectType.checked==driver){

  $driver= mysqli_query($conn, "SELECT * FROM driver WHERE Firstname = '$FirstName', Lastname ='$Lastname', Dateofbirth='$Birthday', Gender='$Gender', Email='$Email', Password='$Password' Phonenb='$PhoneNumber'");
  if(mysqli_num_rows($driver) > 0){
    echo "Username Has Already Taken";
    exit;
  }

  $query1 = "INSERT INTO driver VALUES('$FirstName', '$Lastname','$Birthday', '$Gender', '$Email', '$Password' '$PhoneNumber')";
  mysqli_query($conn, $query);
  echo "Registration Successful";}

else{
    $passenger= mysqli_query($conn, "SELECT * FROM passenger WHERE Firstname = '$FirstName', Lastname ='$Lastname', Dateofbirth='$Birthday', Gender='$Gender', Email='$Email', Password='$Password' Phonenb='$PhoneNumber'");
  if(mysqli_num_rows($driver) > 0){
    echo "Username Has Already Taken";
    exit;
  }

  $query2 = "INSERT INTO passenger VALUES('$FirstName', '$Lastname','$Birthday', '$Gender', '$Email', '$Password' '$PhoneNumber')";
  mysqli_query($conn, $query);
  echo "Registration Successful";}
}


// LOGIN
function login(){
  global $conn;

  $username = $_POST["username"];
  $password = $_POST["password"];

  $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");

  if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($password == $row['password']){
      echo "Login Successful";
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }
}
?>