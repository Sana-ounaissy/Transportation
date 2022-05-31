<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="./css/searchfortrips.css" rel="stylesheet">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
</head>

<body onload='displaySearch()'>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 m-1 p-1 col-lg-12">
        <div class="s002">
          <form>
            <fieldset>
              <legend>SEARCH FOR A TRIP</legend>
            </fieldset>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="What's your destination...">
          </form>
        </div>

      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 m-1 p-1">
        <table id="myTable">
          <thead>
            <tr>
              <th id="_Id">Trip ID</th>
              <th id="_From">From</th>
              <th id="_Firststop">First Stop</th>
              <th id="_Secondstop">Second Stop</th>
              <th id="_To">To</th>
              <th id="_Dateanatime">Date and Time</th>
              <th></th>

            </tr>
          </thead>
          <tbody id="_Tbodysearch">

          </tbody>
        </table>

      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4 mt-5">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="kirk-icon sc-ksZaOG jucjqW" width="40"
          height="40" aria-hidden="true">
          <g fill="none" stroke="#708C91" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
            <path d="M2.43 5.04v3.48c0 1.44 2.34 2.61 5.22 2.61s5.22-1.17 5.22-2.6V5.03"></path>
            <path d="M2.43 8.52V12c0 1.44 2.34 2.6 5.22 2.6a8.7 8.7 0 0 0 3.48-.66"></path>
            <path d="M2.43 12v3.48c0 1.44 2.34 2.6 5.22 2.6a8.7 8.7 0 0 0 3.48-.66"></path>
            <ellipse cx="7.65" cy="5.04" rx="5.22" ry="2.61"></ellipse>
            <path d="M11.13 12v3.48c0 1.44 2.34 2.6 5.22 2.6s5.22-1.16 5.22-2.6V12"></path>
            <path d="M11.13 15.48v3.48c0 1.44 2.34 2.6 5.22 2.6s5.22-1.16 5.22-2.6v-3.48"></path>
            <ellipse cx="16.35" cy="12" rx="5.22" ry="2.61"></ellipse>
          </g>
        </svg>
        <p class=""><b>Your pick of rides at low prices</b></p>
        <p class="">No matter where you’re going, by bus or carpool, find the perfect ride from our wide range of
          destinations and routes at low prices.</p>
      </div>

      <div class="col-sm-4 mt-5">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="kirk-icon sc-ksZaOG jucjqW" width="40"
          height="40" aria-hidden="true">
          <g>
            <path
              d="M19.33,8.5c0-0.276-0.225-0.5-0.5-0.5h-3.855c-0.275,0-0.5,0.224-0.5,0.5s0.225,0.5,0.5,0.5h3.855 C19.105,9,19.33,8.776,19.33,8.5z">
            </path>
            <path
              d="M9.906,8.492V8.133c0-0.994-0.798-1.799-1.781-1.799S6.344,7.139,6.344,8.133v0.359 c0,0.994,0.798,1.799,1.781,1.799S9.906,9.486,9.906,8.492z"
              fill="#708C91"></path>
            <path
              d="M4.167,13.422v0.528c0,0.165,0.134,0.3,0.3,0.3h7.316c0.166,0,0.3-0.135,0.3-0.3v-0.528 c0-0.713-0.474-1.339-1.162-1.526c-0.75-0.204-1.773-0.417-2.797-0.417s-2.047,0.213-2.797,0.417 C4.641,12.083,4.167,12.709,4.167,13.422z"
              fill="#708C91"></path>
            <path
              d="M12,18H1.982V1h2.904C5.11,2.139,6.086,3,7.265,3c1.178,0,2.154-0.861,2.379-2h4.88 c0.225,1.139,1.201,2,2.379,2s2.154-0.861,2.379-2h2.903v9c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5V0.5 c0-0.276-0.224-0.5-0.5-0.5H18.83c-0.276,0-0.5,0.224-0.5,0.5c0,0.833-0.643,1.5-1.428,1.5s-1.428-0.667-1.428-1.5 c0-0.276-0.224-0.5-0.5-0.5H9.192c-0.276,0-0.5,0.224-0.5,0.5c0,0.833-0.643,1.5-1.427,1.5S5.837,1.333,5.837,0.5 c0-0.276-0.224-0.5-0.5-0.5H1.482c-0.276,0-0.5,0.224-0.5,0.5v18c0,0.276,0.224,0.5,0.5,0.5H12c0.276,0,0.5-0.224,0.5-0.5 S12.276,18,12,18z">
            </path>
            <path
              d="M25.354,13.646c-0.195-0.195-0.512-0.195-0.707,0L19,19.293l-2.646-2.646c-0.195-0.195-0.512-0.195-0.707,0 s-0.195,0.512,0,0.707l3,3c0.195,0.195,0.512,0.195,0.707,0l6-6C25.549,14.158,25.549,13.842,25.354,13.646z">
            </path>
          </g>
        </svg>
        <p class=""><b>Trust who you travel with</b></p>
        <p class="">We take the time to get to know each of our members and bus partners. We check reviews, profiles and
          IDs, so you know who you’re travelling with and can book your ride at ease on our secure platform.</p>
      </div>

      <div class="col-sm-4 mt-5">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="kirk-icon sc-ksZaOG jucjqW" width="40"
          height="40" aria-hidden="true">
          <path fill="none" stroke="#708C91" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
            stroke-miterlimit="10" d="M15.5 1.5h-7l-3 11h6l-2 8 10-12h-6z"></path>
        </svg>
        <p class=""><b>Scroll, click, tap and go!</b></p>
        <p class="">Booking a ride has never been easier! Thanks to our simple app powered by great technology, you can
          book a ride close to you in just minutes.</p>
      </div>
    </div>
  </div>


  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script src="./js/searchfortrips.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="./js/searchfortrips.js"></script>
</body>

</html>