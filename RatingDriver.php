<?php
require 'dbconnection.php';

if(isset($_POST['displaySend'])){
    $div = "";
 
  $sql="SELECT  Firstname, Lastname FROM driver ";
  $result=mysqli_query($conn,$sql);
  
//   $number=1;
  while($row=mysqli_fetch_assoc($result)){
 
   $name=$row['Firstname'];  
   $lastname=$row['Lastname'];
  
   print( $div.='<div class="col-lg-4 col-sm-12"> 
   <div class="container d-flex justify-content-center mt-5">
      <div class="card text-center mb-5"> 
         <div class="circle-image">
             <img src="http://bootdey.com/img/Content/avatar/avatar1.png" width="50">
         </div>

        <span class="name mb-1 fw-500">'.$name.'<br>'.$lastname.'</span>

         <div class="rate bg-dark py-3 text-white mt-3" container="justify-content: center">
            <h6 class="mb-0">Rate your driver</h6>
  
                  <div class="my-rating" style="align-items: center; justify-content: center">
  <label style="display: flex; align-items: center; justify-content: center" class="rating-label"><strong> <code></code></strong>
   <input style="text-align: center;" class="rating" max="5" oninput="this.style.setProperty("--value", '.'${this.valueAsNumber}'.')"
          step="0.5" style="--value:2.5" type="range" value="2.5"/>
  </label>
</div>
 
              <div class="buttons px-4 mt-0"> <button
                      class="btn btn-warning btn-block rating-submit">Submit</button>
              </div>
          </div>
      </div> </div>');

  
}

 
  echo json_encode($div);
}

 ?>
  
  