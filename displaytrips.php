<?php
include 'dbconnection.php';

if(isset($_POST['displaySend'])){
    $table='';

    $sql="Select * from trips";
    $result=mysqli_query($conn,$sql);


    while($row=mysqli_fetch_assoc($result)){
     
   $_Id=$row['Trip_ID'];  
   $_From=$row['Fromdestination'];
   $_Firststop=$row['Firststop'];
   $_Secondstop=$row['Secondstop'];
   $_To=$row['Todestination'];
   $_Dateanatime=$row['Dateandtime'];
    $URL="yourtrip.html";


   $table.='<tr onclick="clickbro()">
   <td scope="row">'.$_Id.'</td>
   <td>'.$_From.'</td>
   <td>'.$_Firststop.'</td>
   <td>'.$_Secondstop.'</td>
   <td>'. $_To.'</td>
   <td>'. $_Dateanatime.'</td>
  </tr>';
 
}
//  $table.='</table>';
  echo json_encode($table);
}

?>