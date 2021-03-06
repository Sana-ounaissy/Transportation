<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <link rel="stylesheet" href="./css/EditPassenger.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body onload="editProfilePassenger(1)">
<?php
session_start();
$email = isset($_SESSION["passenger"]) ? $_SESSION["passenger"] : "Anonymous"; //ternary operator
echo "<input  id='sessionresult' value='$email'></input>"; 
?>
    <div class="container-xl px-4 mt-4">
        <header id="header" class=" fixed-top header-transparent">
            <h1 class="logo" style="color: #ffff;">You<span style="color: #ffcb15;">Move</span></a></h1>

        </header>
        <br>
        <br><br>
        <br>
        <br>
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img id="passengerpp" class="img-account-profile rounded-circle mb-2"
                            src="http://bootdey.com/img/Content/avatar/avatar5.png" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <input type="file" class="form-control" id="customFile"
                            onchange="document.getElementById('passengerpp').src = window.URL.createObjectURL(this.files[0])" />
                    </div>
                </div>

            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Passenger Profile</div>
                    <div class="card-body">
                        <form>
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Email</label>
                                <input class="form-control" id="_InputEmailP" type="Email"
                                    placeholder="Enter your Email">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">First name</label>
                                    <input class="form-control" id="_InputFirstNameP" type="text"
                                        placeholder="Enter your first name">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Last name</label>
                                    <input class="form-control" id="_InputLastNameP" type="text"
                                        placeholder="Enter your last name">
                                </div>
                            </div>
                            <!-- Form Row        -->

                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                    <input class="form-control" id="_InputPhoneNumberP" type="tel"
                                        placeholder="Enter your phone number">
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Birthday</label>
                                    <input class="form-control" id="_InputBirthdayP" type="text" name="birthday"
                                        placeholder="Enter your birthday">
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button onclick="updatedProfilePassenger()" class="btn btn-outline-dark" type="button">Save
                                changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    <script src="./js/editprofilepassenger.js"></script>
</body>

</html>