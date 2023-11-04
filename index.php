<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">

<title>  
  HealthAlert
</title>
<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
<!-- CSS Files -->

<link id="pagestyle" href="./assets/css/soft-design-system.css?v=1.0.9" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />


<!-- Nepcha Analytics (nepcha.com) -->
<!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="index-page">
  
  
  <!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
<nav class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
  <div class="container-fluid px-0">
<a class="navbar-brand font-weight-bolder ms-sm-3" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
      HealthAlert
    </a>

          
          <a href="" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0">Lista pacijenata</a>

  </div>
</nav>
<!-- End Navbar -->
</div></div></div>

<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('./assets/img/curved-images/curved.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">HealthAlert</h1>
          <p class="lead text-white mt-3">Aplikacija za pomoć invalidima, bolesnim i starijim osobama</p>
        </div>
      </div>
    </div>

    <div class="position-absolute w-100 z-index-1 bottom-0">
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
          <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="moving-waves">
          <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
          <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
          <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
          <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
          <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
          <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
        </g>
      </svg>
    </div>
  </div>
</header>


<section class="my-5 py-5 row">
  <div class="container p-5">
    <div class="col-12 mx-auto">
      <div id="map" style="width: 100%; height: 500px;"></div>
    </div>
  </div>
</section>
  

  <footer class="footer pt-5 mt-5">
  <hr class="horizontal dark mb-5">
  <div class="container">
    <div class=" row">
      <div class="col-12">
        <div class="text-center">
          <p class="my-4 text-sm">
            Sva prava zadržana. Copyright © <script>document.write(new Date().getFullYear())</script> Princip tim.
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>


  

  
  















<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>




<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="./assets/js/plugins/countup.min.js"></script>





<script src="./assets/js/plugins/choices.min.js"></script>





<script src="./assets/js/plugins/prism.min.js"></script>
<script src="./assets/js/plugins/highlight.min.js"></script>





<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="./assets/js/plugins/rellax.min.js"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="./assets/js/plugins/tilt.min.js"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="./assets/js/plugins/choices.min.js"></script>


<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="./assets/js/plugins/parallax.min.js"></script>








<!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="./assets/js/soft-design-system.min.js?v=1.0.9" type="text/javascript"></script>


<script type="text/javascript">

  if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    };
  }
</script>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>

  <script>
        var map = L.map('map').setView([51.505, -0.09], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var startPoint = L.latLng(43.3152, 21.9134);
        var endPoint = L.latLng(43.3298, 21.8936);

        L.Routing.control({
            waypoints: [
                startPoint,
                endPoint
            ]
        }).addTo(map);
  </script>





























</body>

</html>

<?php

?>
