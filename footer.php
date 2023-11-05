
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



    <!-- Uključite jQuery pre DataTables JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Uključite DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    


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
        var map = L.map('map').setView([43.3152, 21.9134], 14);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var startPoint = L.latLng(43.3152, 21.9134);
        var endPoint = L.latLng(43.3298, 21.8936);

        var custom = L.latLng(43.3152, 21.9134);

        var customIcon = L.divIcon({
            className: 'custom-icon',
            iconSize: [30, 30],
            html: '<div style="background-color: red; width: 30px; height: 30px; border-radius: 50%;"></div>'
        });

        var customMarker = L.marker(custom, { icon: customIcon }).addTo(map);
        customMarker.bindPopup('Ovo je Vaša pozicija!').openPopup();


        L.Routing.control({
            waypoints: [
                startPoint,
                endPoint
            ]
        }).addTo(map);
  </script>

        <script>
        // Inicijalizuj DataTables na tabeli sa ID "example"
        $(document).ready(function() {
            $('#tabela').DataTable();
        });
    </script>


