<?php
require 'dbconnection.php';

if(isset($_POST['displaySend'])){
    $table = '<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">From</th>
      <th scope="col">First Stop</th>
      <th scope="col">Second Stop</th>
      <th scope="col">To</th>
      <th scope="col">Date and Time</th>
      <th scope="col">Buttons</th>
    </tr>
  </thead>';

  
  $sql="Select * from `trips`";
  $result=mysqli_query($conn,$sql);
$number=1;
  while($row=mysqli_fetch_assoc($result)){
   $id=$row['Trip_ID'];   
   $From=$row['Fromdestination'];  
   $FirstStop=$row['Firststop'];
   $SecondStop=$row['Secondstop'];
   $To=$row['Todestination'];
   $Date=$row['Dateandtime'];

   $table.='<tr>
   <td scope="row">'.$number.'</td>
   <td>'.$From.'</td>
   <td>'.$FirstStop.'</td>
   <td>'.$SecondStop.'</td>
   <td>'.$To.'</td>
   <td>'.$Date.'</td>
   <td> 
   <button class="btn btn-warning" onclick="GetDetails('.$id.')">Update</button>
   <button class="btn btn-dark" onclick="DeleteUser('.$id.')">Delete</button>
   </td>

  </tr>';
  $number++;
}

 $table.='</table>';
  echo json_encode($table);
}

?>