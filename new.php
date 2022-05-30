
<!DOCTYPE html>

<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/AboutUs.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="./css/SignUp.css">
<!-- testttttttttttt -->
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Raleway", sans-serif
  }

  body,
  html {
    height: 100%;
    line-height: 1.8;
  }

  /* Full height image header */
  .bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("./Assets/cars.jpg");
    min-height: 100%;

  }

  #h {
    background-image: url("./Assets/");
  }


  .bgimg-1::before {
    content: "";
    background: rgba(51, 51, 52, 0.833);
    position: absolute;
    width: 100%;
    height: 100%;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
  }



  .w3-bar .w3-button {
    padding: 16px;
  }

  #an {
    animation-duration: 3s;
  }

  div {
    animation-duration: 3s;
  }
</style>

<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
      <a href="#home" class="w3-bar-item w3-button w3-wide">You<span1 class="w3-hover-opacity" style="color: #ffcb15; ">
          Move</span1></a>
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
        <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
        <a href="#question" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Questions</a>
        <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
        <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
        <a href="LogIn.html" class="w3-bar-item w3-button"><i class="fa fa-user-circle-o"></i>LOGIN</a>
      </div>
      <!-- Hide right-floated links on small screens and replace them with a menu icon -->

      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
        onclick="w3_open()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>

  <!-- Sidebar on small screens when clicking the menu icon -->
  <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large"
    style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#question" onclick="w3_close()" class="w3-bar-item w3-button">Questions</a>

    <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    <a href="LogIn.html" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
  </nav>

  <!-- Header with full-height image -->

  <header class="bgimg-1 w3-display-container " id="home">
    <div class="w3-display-left w3-text-white" style="padding:48px">
      <span id="an" class="w3-jumbo w3-small w3-animate-top ">Welcome to You<span
          style="color: #ffcb15;">Move</span></span><br>

      <span class="w3-large ">An advanced city is not a place where the poor move about in cars,<br> rather it's where
        even the rich use public transportation.</span>
      <p><a class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity " data-bs-toggle="modal"
          data-bs-target="#myModal">SignUp</a></p>
    </div>

    <div class="modal fade" id="myModal" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-fullscreen-md-down modal-lg">
        <div class="modal-content">



          <!-- Modal body -->
          <div class="modal-body">
            <section class="w-100" style="background-color: #00e9af7e;">

              <div class="row justify-content-center">

                <div class="col-12">
                  <div class="card rounded-5">

                    <img src="./Assets/passs.jpg" class="w-100"
                      style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">

                    <div class="card-body">


                      <form class="px-md-2" autocomplete="off" action="" method="post">
                        <input type="hidden" id="action" value="register">
                        <div class="row row-space">
                          <div class="col-6">
                            <div class="input-group">
                              <label class="label">First Name </label>
                              <input id="_FirstName" class="input--style-4" type="text" name="FirstName">
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="input-group">
                              <label class="label">Last Name </label>
                              <input id="_LastName" class="input--style-4" type="text" name="LastName">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-6">
                            <label style="text-align: left;" class="label">Birthday</label>

                            <div class="input-group">

                              <div class="input-group-icon">
                                <input id="_Birthday" class="input--style-4 js-datepicker" type="date" name="Birthday">
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col-6">
                            <label style="text-align: left;" class="label">Gender</label>
                            <div class="input-group">

                              <div class="p-t-10">
                                <label class="radio-container m-r-45">Male
                                  <input id="_Male" class="Gender" type="radio" checked="checked" name="Gender" value="Male">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                  <input id="_Female" class="Gender" type="radio" name="Gender" value="Female">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">

                          <div class="col-6">
                            <div class="input-group">
                              <label class="label">Email</label>
                              <input id="_Email" class="input--style-4" type="email" name="Email">
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="input-group">
                              <label class="label">Phone Number</label>
                              <input id="_PhoneNumber" class="input--style-4" type="text" name="PhoneNumber">
                            </div>
                          </div>

                        </div>

                        <div class="row">

                          <div class="col-6">
                            <div class="input-group">
                              <label class="label">Password</label>
                              <input id="_Password" class="input--style-4" type="password" name="Password">
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="input-group">
                              <label class="label">Confirm Password</label>
                              <input id="_ConfirmPassword" class="input--style-4" type="password"
                                name="confirmpassword">
                            </div>
                          </div>

                        </div>

                        <div class="row">
                          <div class="col-12">
                            <div class="input-group">

                              <br>
                              <select id="_SelectType" style="background-color: #f9fafb; border-color: #f9fafb;"
                                class="form-select">

                                <option name="aswhat" value="Driver">Driver</option>
                                <option name="aswhat" value="Passenger">Passenger</option>

                              </select>
                            </div>
                            <div class="p-t-15">

                              <input class="btn btn--radius-2 btn--blue" id="_BtnSignUp" type="submit" value="SignUp"
                                onclick="insertUser()">Already have an account? <a href="./LogIn.html">LOGINp</a></input>

                            </div>
                          </div>

                        </div>


                      </form>

                    </div>
                  </div>
                </div>
              </div>

            </section>
          </div>
        </div>
      </div>
    </div>

    <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
  </header>

  <!-- About Section -->

  <div class="w3-container" style="padding:128px 16px" id="about">
    <div class="w3-row">
      <div class=" w3-third w3-container ">
        <p>
        <h3 class="fst-italic fw-bold">Our Services</h3> <br>
        <h4 class="fst-italic fw-light">We offer public transportaion with a simple website that would facilitate the
          communication between passengers and drivers with tracking and booking tools</h4>
        </p>
      </div>
      <div class="  w3-third w3-container w3-animate-top" style="animation-duration: 6s;">
        <p><img id="im" src="Assets/cars.jpg" class="img-fluid" alt="img-fluid"></p>
      </div>
      <div class=" w3-third w3-containerr">
        <p>
        <h3 class="fst-italic fw-bold">Our Services</h3> <br>
        <h4 class="fst-italic fw-light">We offer public transportaion with a simple website that would facilitate the
          communication between passengers and drivers with tracking and booking tools</h4>
        </p>
      </div>
    </div>

    <div class="w3-row w3-container">
      <div class=" w3-third w3-container w3-animate-left" style="animation-duration: 6s;">
        <p><img id="img" src="Assets/pass.jpg" class="img-fluid" alt="img-fluid"></p>
      </div>
      <div class=" w3-third w3-container ">
        <p>
        <h3 class="fst-italic fw-bold">About company</h3> <br>
        <h4 class="fst-italic fw-light"> Due to the fuel crisis and it's expensive prices we introduce “company name”
          making transportation fast and safe. </h4>
        </p>
      </div>
      <div class=" w3-third w3-container w3-animate-right" style="animation-duration: 6s;">
        <p><img id="ima" src="Assets/srdriver.jpg" class="img-fluid" alt="img-fluid"></p>
      </div>
    </div>





    <style>
      .accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
      }

      .active,
      .accordion:hover {
        background-color: #ccc;
      }

      .panel {
        padding: 0 18px;
        display: none;
        background-color: white;
        overflow: hidden;
      }

      #contact {
        background-image: url("./Assets/contactus.png");
        min-height: 15px;
      }

      .in {
        width: 50%;
        height: 30px;
      }

      form {
        text-align: center;
      }
    </style>
    </head>
    <div class="w3-container" style="padding:70
   
   px 16px" id="question">

      <h2>Frequently asked questions</h2>

      <button class="accordion">How can i provide from your trip as a passenger?</button>
      <div class="panel">
        <p>if you are a passenger you can provide from our trips by simply Signing up then searching for a trip
          depending on your adress wherever you are..</p>
      </div>

      <button class="accordion">How can i work with you as driver?</button>
      <div class="panel">
        <p>If you need to work with us as a driver you should Sign up and wait till the admin confirms your
          registration.</p>
      </div>

      <button class="accordion">Why are buses sometimes late?</button>
      <div class="panel">
        <p>Traffic delays, weather
          conditions, accidents or driver's illness are just a few reasons.</p>
      </div>
      <button class="accordion">Is the wifi provided fast?</button>
      <div class="panel">
        <p>Yes it's reliable for people usingour service</p>
      </div>
    </div>
    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.display === "block") {
            panel.style.display = "none";
          } else {
            panel.style.display = "block";
          }
        });
      }
    </script>




    <!-- Pricing Section -->
    <div class="w3-container w3-center " style="padding: 70px" id="pricing">

      <h3 id="h">PRICING</h3>
      <p class="w3-large">Choose a pricing plan that fits your needs.</p>
      <div class="w3-row-padding" style="margin-top:64px">
        <div class="w3-third w3-section">
          <ul class="w3-ul w3-white w3-hover-shadow">
            <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
            <li class="w3-padding-16"><b>Wifi is not available</b></li>
            <li class="w3-padding-16"><b>AC is not available</b></li>
            <li class="w3-padding-16"><b>only one seat</b></li>
            <li class="w3-padding-16"><b>Endless</b> Support</li>
            <li class="w3-padding-16">
              <h2 class="w3-wide">$ 10</h2>

            </li>
            <li class="w3-light-grey w3-padding-24">
              <a href="PricingCal.html" class="w3-button w3-black w3-padding-large">Pricing calculator</a>
            </li>
          </ul>
        </div>
        <div class="w3-third">
          <ul class="w3-ul w3-white w3-hover-shadow">
            <li style="background-color:#ffcb15
        " class="w3-xlarge w3-padding-48"> Pro</li>
            <li class="w3-padding-16"><b>Wifi is not available</b> </li>
            <li class="w3-padding-16"><b>AC is available</b></li>
            <li class="w3-padding-16"><b>two seats are available</b></li>
            <li class="w3-padding-16"><b>Endless</b> Support</li>
            <li class="w3-padding-16">
              <h2 class="w3-wide">$ 25</h2>

            </li>
            <li class="w3-light-grey w3-padding-24">
              <a href="PricingCal.html" class="w3-button w3-black w3-padding-large">Pricing calculator</a>
            </li>
          </ul>
        </div>
        <div class="w3-third w3-section">
          <ul class="w3-ul w3-white w3-hover-shadow">
            <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
            <li class="w3-padding-16"><b>50GB</b> Wifi</li>
            <li class="w3-padding-16"><b>AC is available</b> Emails</li>
            <li class="w3-padding-16"><b>taxi</b> </li>
            <li class="w3-padding-16"><b>Endless</b> Support</li>
            <li class="w3-padding-16">
              <h2 class="w3-wide">$ 50</h2>

            </li>
            <li class="w3-light-grey w3-padding-24">
              <a href="PricingCal.html" class="w3-button w3-black w3-padding-large">Pricing calculator</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Contact Section -->
    <div class="w3-container w3-white" style="padding:50px 16px" id="contact">
      <h3 class="w3-center w3-text-white">CONTACT</h3>
      <p class="w3-center w3-large w3-text-white">Lets get in touch. Send us a message:</p>
      <div style="margin-top:48px">
        <p class="w3-text-white"><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right w3-white"></i> Chicago, US
        </p>
        <p class="w3-text-white"><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right w3-white"></i> Phone: +00 151515
        </p>
        <p class="w3-text-white"><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right w3-white"> </i> Email:
          mail@mail.com</p>
        <br>
        <form>
          <p><input class="in" class="w3-input w3-animate-input" id="_ContactName" type="text" placeholder="Name"
              required name="Name">
          </p><br>
          <p><input class="in" class="w3-input w3-animate-input" id="_ContactEmail" type="text" placeholder="Email"
              required name="Email">
          </p><br>
          <p><input class="in" class="w3-input w3-animate-input" id="_ContactSubject" type="text" placeholder="Subject"
              required name="Subject"></p><br>
          <p><input class="in" class="w3-input w3-animate-input" id="_ContactMessage" type="text" placeholder="Message"
              required name="Message"></p><br>
          <p>
            <button onclick="insertContactus()" style="color: #ffcb15;" class="w3-button w3-black">
              <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
          </p>
        </form>
        <!-- Image of location/map -->


        <!-- <div class="w3-content w3-section" style="max-width:500px">
      <img class="mySlides" src="./Assets/first.jpg" style="width:100%">
      <img class="mySlides" src="./Assets/prog.jpg" style="width:100%">
      <img class="mySlides" src="./Assets/team.jpg" style="width:100%">
      <img class="mySlides" src="./Assets/fast.jpeg" style="width:100%">
    </div>
    
    <script>
    var myIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    </script>
  </div>
</div> 
-->

        <!-- Footer -->
        <footer class="w3-center w3-black w3-padding-64">
          <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
          <div class="w3-xlarge w3-section">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
          </div>

        </footer>

        <script>
          // Modal Image Gallery
          function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
          }


          // Toggle between showing and hiding the sidebar when clicking the menu icon
          var mySidebar = document.getElementById("mySidebar");

          function w3_open() {
            if (mySidebar.style.display === 'block') {
              mySidebar.style.display = 'none';
            } else {
              mySidebar.style.display = 'block';
            }
          }

          // Close the sidebar with the close button
          function w3_close() {
            mySidebar.style.display = "none";
          }
        </script>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
                   integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
                   crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
          </script>
        <script src="./js/ContactUs.js"></script>
        <script src="./js/SignUp.js"></script>
       
</body>

</html>