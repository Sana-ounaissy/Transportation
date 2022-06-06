<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="./css/message.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body onload="displayData()">

  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3">
        <div class="sidebar">
          <p<h3><b style="color: black;">You</b><b style="color: #ffc107;">Move</b></h3>
            </p>
            <a href="admindriver.php">Drivers</a>
            <a href="edittrip.php">Trips</a>
            <a class="active" href="message.php">Messages</a>

        </div>
        
      </div>
   
      <div class="col-sm-8 mt-5" id="DisplayContactUsTable">
      
   
      
      <!-- <table style="border: 1px solid black;">

          <thead>

            <h5>CONTACT US MESSAGES:</h5>
            <tr>
              <th> Name </th>
              <th> Email </th>
              <th>Subject</th>
              <th> Message </th>

            </tr>
          </thead>
          <tbody id="tbodymessages">
            
          </tbody>
        </table> -->



      </div>


      <br>
      <br>
      <br>
    </div>
    <div class="row">
   
      <div class="col-sm-3">
       
      </div>
      <div class="col-sm-8" id ="DisplayDriverMessage"></div>
    </div>

  </div>

  <style>
    table,
    th,
    td {
      border: 1px solid black;
    }
  </style>
  

           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
                   integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
                   crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./js/ContactUs.js"></script>
  <!-- <script src="./js/message.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>