<?php
require 'dbconnection.php';

if(isset($_POST['displaySend'])){
    $div = '';
 
  $sql="SELECT  Driver_ID, Firstname, Lastname FROM driver ";
  $result=mysqli_query($conn,$sql);
  
//   $number=1;
  while($row=mysqli_fetch_assoc($result)){
 
   $name=$row['Firstname'];  
   $lastname=$row['Lastname'];
   $ID = $row['Driver_ID'];
  
   $div .='<div class="col-lg-4 col-sm-12"> 
           <div class="container d-flex justify-content-center mt-5">


           <div class="card text-center mb-5">

           <div class="circle-image">
           <img src="http://bootdey.com/img/Content/avatar/avatar1.png" width="50">
           </div>
           <span class="name mb-1 fw-500">'.$name.'<br>'.$lastname.'</span>

           <div class="rate bg-dark py-3 text-white mt-3" container="justify-content: center">
            <h6 class="mb-0">Rate your driver</h6>

            <form class="rating">
              <label>
                <input id="in1" type="radio" name="stars" value="1" />
                <span class="icon">★</span>
              </label>
              <label>
                <input id="in2" type="radio" name="stars" value="2" />
                <span class="icon">★</span>
                <span class="icon">★</span>
              </label>
              <label>
                <input type="radio" name="stars" value="3" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>   
              </label>
              <label>
                <input type="radio" name="stars" value="4" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
              </label>
              <label>
                <input type="radio" name="stars" value="5" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
              </label>
            </form>
            <input type="hidden" id="hiddenrating" value=""></input>
           <div class="buttons px-4 mt-0"> <button class="btn btn-warning btn-block rating-submit" onclick="getRating('.$ID.')">Submit</button> </div>
           </div>


           </div>


        </div>
        </div>';

  
}

 
  echo json_encode($div);
}

 ?>
  
  