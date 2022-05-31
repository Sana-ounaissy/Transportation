<?php
include 'dbconnection.php';

if(isset($_POST['displaySend'])){
    $table = '<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">From</th>
      <th scope="col">First Stop</th>
      <th scope="col">Second Stop</th>
      <th scope="col">To</th>
      <th scope="col">Date and Time</th>
    </tr>
  </thead>';

  $sql="Select * from `trips`";
  $result=mysqli_query($conn,$sql);
  
  $number=1;
  while($row=mysqli_fetch_assoc($result)){
    
   $From=$row['Fromdestination'];  
   $FirstStop=$row['Firststop'];
   $SeconStop=$row['Secondstop'];
   $To=$row['Todestination'];
   $Date=$row['Dateandtime'];

   $table.='<tr>
   <td scope="row">'.$number.'</td>
  
   <td>'.$From.'</td>
   <td>'.$FirstStop.'</td>
   <td>'.$SeconStop.'</td>
   <td>'.$To.'</td>
   <td>'.$Date.'</td>
    
   
   </td>

  </tr>';
  $number++;
}

 $table.='</table>';
  echo json_encode($table);
}

?>