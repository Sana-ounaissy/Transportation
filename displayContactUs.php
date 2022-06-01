<?php
require 'dbconnection.php';

if(isset($_POST['displaySend'])){
    $table = '<table class="table">
  <thead class="table-dark" >
    <tr>
    <th scope="col">Name</th>
      <th scope="col">Email</th>
       <th scope="col">Subject</th>
     
     <th scope="col">Message</th>
      
    
     
    </tr>
  </thead>';

 
  $sql="SELECT name, Email, subject, Messages FROM contactus ";
  $result=mysqli_query($conn,$sql);
  
  
  while($row=mysqli_fetch_assoc($result)){
    $name=$row['name'];
    $Email=$row['Email']; 
     $subject=$row['subject'];   
   $Message=$row['Messages'];
  
  
  
   
  

   $table.='<tr>

<td>'.$name.'</td>
 <td>'.$Email.'</td>
  <td>'.$subject.'</td>
   <td>'. $Message.'</td>
  
   
   

   
  </tr>';
 
}

 $table.='</table>';
  echo json_encode($table);
}

?>