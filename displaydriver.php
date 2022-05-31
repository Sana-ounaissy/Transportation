<?php
require 'dbconnection.php';

if(isset($_POST['displaySend'])){
    $table = '<table class="table">
  <thead class="table-dark" >
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Firstname</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
     <th scope="col">Rating</th>
      <th scope="col"></th>
    </tr>
  </thead>';

 
  $sql="SELECT Driver_ID, Firstname, Lastname, Email, Phonenb, Rating 
  FROM driver ";
  $result=mysqli_query($conn,$sql);
  
  $number=1;
  while($row=mysqli_fetch_assoc($result)){
   $id=$row['Driver_ID'];   
   $name=$row['Firstname'];  
   $lastname=$row['Lastname'];
   $email=$row['Email'];
   $phone=$row['Phonenb'];
   
   $rating=$row['Rating'];

   $table.='<tr>
   <td scope="row">'.$number.'</td>
   <td>'. $name.'</td>
   <td>'.$lastname.'</td>
   <td>'.$email.'</td>
   <td>'.$phone.'</td>

   <td>'.$rating.'</td>
   <td> 
  <input type="button" value="Confirm" id="btn" onclick="myFunction()" class="btn btn-warning">
   <button class="btn btn-dark" onclick="Deletedriver('.$id.')">Delete</button>
   </td>

  </tr>';
  $number++;
}

 $table.='</table>';
  echo json_encode($table);
}

?>