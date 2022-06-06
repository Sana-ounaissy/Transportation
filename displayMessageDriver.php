<?php
require 'dbconnection.php';

if(isset($_POST['displayChatSend'])){
    $table = '<table class="table">
  <thead class="table-dark" >
    <tr>

      <th scope="col">Email</th>
      
     
     <th scope="col">Driver Chat</th>
      
    
     
    </tr>
  </thead>';

 
  $sql="SELECT  Driver_Email, Message FROM messages_driver ";
  $result=mysqli_query($conn,$sql);
  
  
  while($row=mysqli_fetch_assoc($result)){
   
    $Email=$row['Driver_Email']; 
    $Message=$row['Message'];
  
  
  
   
  

   $table.='<tr>


 <td>'.$Email.'</td>

   <td>'. $Message.'</td>
  
   
   

   
  </tr>';
 
}

 $table.='</table>';
  echo json_encode($table);
}

?>