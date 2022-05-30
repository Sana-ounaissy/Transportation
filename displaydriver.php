<?php
require 'dbconnection.php';

if(isset($_POST['displaySend'])){
    $table = '<table class="table">
  <thead class="table-dark" >
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Type</th>
      <th scope="col">Rating</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>';

 
  $sql="SELECT d.Driver_ID, d.Fistname, d.Lastname, d.Email, d.Phonenb, v.Type, d.Rating 
  FROM driver d
  INNER JOIN vehicle v
  ON d.Driver_ID =v.Vehicle_ID";
  $result=mysqli_query($conn,$sql);
  
  $number=1;
  while($row=mysqli_fetch_assoc($result)){
   $id=$row['Driver_ID'];   
   $name=$row['Fistname'];  
   $lastname=$row['Lastname'];
   $email=$row['Email'];
   $phone=$row['Phonenb'];
   $type=$row['Type'];
   $rating=$row['Rating'];

   $table.='<tr>
   <td scope="row">'.$number.'</td>
   <td>'. $name.'</td>
   <td>'.$lastname.'</td>
   <td>'.$email.'</td>
   <td>'.$phone.'</td>
   <td>'.$type.'</td>
   <td>'.$rating.'</td>
   <td> 
   <button class="btn btn-warning">Confirm</button>
   <button class="btn btn-dark" onclick="Deletedriver('.$id.')">Delete</button>
   </td>

  </tr>';
  $number++;
}

 $table.='</table>';
  echo json_encode($table);
}

?>