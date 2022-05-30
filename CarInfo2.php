<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/CarInfo2.css">

</head>

<body>



    <div class="container mt-5">
        <div style="text-align:center">
            <h1 style="font-family: 'Courier New', Courier, monospace; font-weight: 700; color: rgb(255, 255, 255);">Car
                Information
            </h1>
            <br><br><br>

        </div>
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-0"></div>

            <div class="col-lg-6 col-md-8 col-sm-12">
                <form>


                    <div class="card card-4">
                        <div class="">

                            <form method="POST">




                                <div class="row row-space" style="margin-top: 5%;">
                                    <div class="col-12">
                                        <label class="label">Availability of wifi ?</label>
                                        <div class="p-t-10">
                                            <label class="radio-container m-r-45">Yes
                                                <input value="With Wifi" type="radio" checked="checked" name="WIFI">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">No
                                                <input  value="No Wifi" type="radio" name="WIFI">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <br>
                                <br>
                                <div class="row row-space">
                                    <div class="col-12">
                                        <label class="label">Availability of (AC) ?</label>
                                        <div class="p-t-10">
                                            <label class="radio-container m-r-45">Yes
                                                <input value="With AC" type="radio" checked="checked" name="AC">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">No
                                                <input value="No AC" type="radio" name="AC">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <br>

                                <div class="row row-space">
                                    <div class="col-12">
                                        <label class="label">Number of seats available ?</label>
                                        <div class="p-t-10">

                                            <div>
                                                <input type="number" id="myNumber"  name ="nbseats">



                                                <script>
                                                    function myFunction() {
                                                        var x = document.getElementById("myNumber").value;
                                                        document.getElementById("demo").innerHTML = x;
                                                    }
                                                </script>
                                            </div>





                                        </div>
                                    </div>

                                </div>

                                <br>

                                <div class="row row-space">

                                    <div class="col-12">
                                        <label class="label">Type of vehicle</label>
                                        <div class="">

                                            <select class="form-select" aria-label="Default select example" id="_Type">
                                                <option value="Bus">Bus</option>
                                                <option value="Car">Car</option>

                                            </select>

                                        </div>
                                    </div>

                                </div>
                                <br>
                                <div class="row row-space">
                                    <div class="col-12">


                                        <div class="p-t-15">
                                            <button id="Save" class="btn btn--radius-2 btn--blue"
                                                type="submit" onclick = "Saveinfo()">Save</button>
                                        </div>

                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>



                </form>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-0"></div>
        </div>
        <div class="row">

        </div>
    </div>







    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
 integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        
        <script src="./js/carinfo2.js"></script>
</body>

</html>