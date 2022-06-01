<?php
session_start();
include('dbconnection.php');

$email = $_POST['email'];
$passw = $_POST['password'];
$_SESSION['driver'] = '';
$_SESSION['passenger'] = '';

$sql = " SELECT * FROM driver WHERE Email = '$email' AND Passward = '$passw'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows === 1) {
    //Current user is in Admin table, hence he/she is an admin
    $_SESSION['driver'] = $email;
    header("location:Driver2.php");
    exit(0);
    //.$_SESSION['admin']
} elseif ($result->num_rows > 1) {
      //there should not be more than one rows with same credentials. Two rows with same (username, password), Make username primary key.
      throw new Exception("Multiple entry with same username and password in admin table");
} else {
    //Given credentials are not in admin table, check user table.
    $sql1 = " SELECT * FROM passenger WHERE Email= '$email' AND Passward = '$passw'";
    $result1 = mysqli_query($conn, $sql1);
    if ($result1->num_rows === 1) {
        $_SESSION['passenger'] = $email;
        header("location:passenger2.php");
        //.$_SESSION['user'];
    } elseif ($result->num_rows > 1) {
        throw new Exception("Multiple entry with same username and password in user table");
    }
    else {
        //Nither in User nor in admin table
        
        header("location:Login.html");
    }
    
}
$sql2= " SELECT * FROM admin WHERE Email = '$email' AND Passward = '$passw'";
$result2 = mysqli_query($conn, $sql2);

if ($result2->num_rows === 2) {
    //Current user is in Admin table, hence he/she is an admin
    $_SESSION['admin'] = $email;
    header("location:admindriver.php");
    exit(0);
    
    //.$_SESSION['admin']
}

$conn->close();
?>