<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="./css/tripinfo.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body onload="displayData()">
  <?php
session_start();
$email = isset($_SESSION["driver"]) ? $_SESSION["driver"] : "Anonymous"; //ternary operator
echo "<input type='hidden'  id='sessionchat' value='$email'></input>"; 
?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 ms-1">

        <h3><b style="color: rgb(2, 2, 2);">You</b><b style="color:#ffc107;">Move</b></h3>
      </div>
    </div>
  </div>
  <br>
  <h3 class="lead ms-4" style="color: rgb(2, 2, 2);">Your Trips</h3>
  <br>
  <div class="container mt-3" id="displayDataTable">
    <!-- <table id="tb" class="table table-striped">
      <thead>
        <tr>
          <th id="_Id">trip ID</th>
          <th id="_From">from</th>
          <th id="_Firststop">first Stop</th>
          <th id="_Secondstop">Second Stop</th>
          <th id="_To">To</th>
          <th id="_Dateanatime">Date and Time</th>
          <th></th>

        </tr>
      </thead>
      <tbody id="_Tbodyripinfo">

      </tbody>
    </table> -->
  </div>
  <br>
  <!--Section: Contact v.2-->
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <button class="open-button" onclick="openForm()">Chat the Admin</button>

        <div class="chat-popup" id="myForm">
          <form class="form-container">
            <h2>Chat</h2>

            <label for="msg"><b>Message</b></label>
            <textarea id="Mess" placeholder="Type message.." name="msg" required></textarea>

            <button onclick="chatDriver()" class="btn">Send</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
     integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./js/tripinfo.js"></script>
</body>

</html>