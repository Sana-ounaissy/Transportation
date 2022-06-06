<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/edittrip.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  
    <div class="container-fluid">
      <div class="row content">
        <div class="col-sm-3">
          <div class="sidebar">
            <p<h3><b style="color: black;">You</b><b style="color: #ffc107;">Move</b></h3></p>
            <a href="admindriver.php">Drivers</a>
            <a class="active" href="edittrip.php">Trips</a>
            <a href="message.php">Messages</a>
           
          </div>
        </div>
     

        <div class="col-sm-8 mt-5 mb-5">
    
        <div class="modal fade" id="completeModal">
        <div class="modal-dialog">
            <div class="modal-content">
                

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Trip</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                        
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" class="form-control" placeholder="From" name="From" id="From">
                            </div>

                            <div class="form-group">
                                <label>First Stop</label>
                                <input type="text" class="form-control" placeholder="First Stop" name="FirstStop" id="FirstStop">
                            </div>

                            <div class="form-group">
                                <label>Second Stop</label>
                                <input type="text" class="form-control" placeholder="Second Stop" name="SecondStop" id="SecondStop">
                            </div>

                            <div class="form-group">
                                <label>To</label>
                                <input type="text" class="form-control" placeholder="To" name="To" id="To">
                            </div>
                            <div class="form-group">
                                <label>Date and Time</label>
                                <input type="datetime-local" class="form-control"  name="Date" id="Date">
                            </div>


            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal" onclick="addtrip()">Submit</button>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
        </div>

            <!-- The UPDATE Modal -->
        <div class="modal fade" id="updateModal">
        <div class="modal-dialog">
            <div class="modal-content">
                

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update User</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                        
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" class="form-control" placeholder="From" name="from" id="updateFrom">
                            </div>

                            <div class="form-group">
                                <label>First Stop</label>
                                <input type="email" class="form-control" placeholder="FirstStop" name="firststop" id="updateFirstStop">
                            </div>

                            <div class="form-group">
                                <label>Second Stop</label>
                                <input type="text" class="form-control" placeholder="SecondStop" name="secondstop" id="updateSecondStop">
                            </div>

                            <div class="form-group">
                                <label>To</label>
                                <input type="text" class="form-control" placeholder="To" name="to" id="updateTo">
                            </div>
                            <div class="form-group">
                                <label>Date and Time</label>
                                <input type="datetime-local" class="form-control"  name="date" id="updateDate">
                            </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal" onclick="updateDetails()">Update</button>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                <input type="hidden" id="hiddendata">
            </div>

            </div>
        </div>
        </div>    
    
    <div class="container">
        <button class="btn btn-dark my-4"  data-bs-toggle="modal" data-bs-target="#completeModal">Add new trip</button>
        <div id="displayDataTable">
             
        </div>








    </div>
        </div>

      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
 integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./js/edittrip.js"></script>
  </body>
  

</html>