<?php
include 'dbconnection.php';

if(isset($_POST['displaySend'])){
    $table = '<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
    
    </tr>
  </thead>';

  $sql="Select * from contactus";
  $result=mysqli_query($conn,$sql);
  
 
  while($row=mysqli_fetch_assoc($result)){
     
   $name=$row['name'];  
   $email=$row['Email'];
   $subject=$row['subject'];
   $Messages=$row['Messages'];

   $table.='<tr>
   <td scope="row">'.$name.'</td>
   <td>'.$email.'</td>
   <td>'.$subject.'</td>
   <td>'.$Messages.'</td>
   
  

  </tr>';
 
}

 $table.='</table>';
  echo json_encode($table);
}

?>