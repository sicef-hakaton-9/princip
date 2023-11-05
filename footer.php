
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

        var custom = L.latLng(43.3152, 21.9134);

        var customIcon = L.divIcon({
            className: 'custom-icon',
            iconSize: [30, 30],
            html: '<div style="background-color: red; width: 30px; height: 30px; border-radius: 50%;"></div>'
        });

        var customMarker = L.marker(custom, { icon: customIcon }).addTo(map);
        customMarker.bindPopup('Ovo je Vaša pozicija!').openPopup();

  </script>

        <script>
        // Inicijalizuj DataTables na tabeli sa ID "example"
        $(document).ready(function() {
            $('#tabela').DataTable();
        });
    </script>

    <script type="text/javascript">
  let modalSubmit = document.querySelector("#modalSubmit");
  let modalForm = document.querySelector("#formModal");
  let modalErrors = document.querySelector(".errors");
 
  modalSubmit.addEventListener("click", async (e) => {
    e.preventDefault();
    let formData = new FormData(modalForm);
 
    let data = {
      firstname: formData.get("firstname"),
      lastname: formData.get("lastname"),
      age: formData.get("age"),
      JMBG: formData.get("JMBG"),
      carton_id: formData.get("carton_id"),
      address: formData.get("address"),
      number: formData.get("brojTelefona"),
      numberGuardian: formData.get("brojTelefonaStaratelja"),
      pol: +formData.get("pol"),
      rizik: +formData.get("rizik")
    }

    console.log(data);
 
    let errors = validate(data);

    console.log("greske", errors);
 
    if(errors.length > 0)
    {
      errors.forEach(error => {
        modalErrors.innerHTML+=`<span class="form-text text-danger">${error}</span><br />`;
      })
 
      return;
    }
 
 
    await fetch("https://forexfl.com/princip/api.php?a=add_patient", {
      method: "POST",
      body: JSON.stringify({
        ...data,
        token: "K5dP9q2w8GfXtLmVbU7Z"
      })
    })
  })
 
  function validate(data)
  {
    let errors = [];
 
    if(isNaN(+data.age))
    {
      errors.push("Godine moraju biti broj!");
    }
 
    if(data.JMBG.length !== 13)
    {
      errors.push("JMBG mora da ima 13 karaktera!");
    }
 
    if(data.JMBG.split("").some(n => isNaN(+n)))
    {
      errors.push("JMBG mora da ima sve brojeve!");
    }
 
    if(data.carton_id.split("").some(n => isNaN(+n)))
    {
      errors.push("Broj kartona mora imati sve brojeve!")
    }
 
    return errors;
  }
</script>


<script>
  var globalv = 0;
  function fetchAndDisplayData() {
    fetch('https://forexfl.com/princip/api.php?a=getSOS')
      .then(response => response.json())
      .then(data => {
        // Pristup prvom objektu u nizu
        var firstData = data[0];
        if(globalv > 0){
          return;
        }

        document.getElementById('alert').innerHTML = `
        <div style="padding-left:5px; padding-right:5px;">
        <div class="alert alert-danger text-white font-weight-bold" style="margin-bottom:0px; display: flex; align-items: center;" role="alert">
      Poziv za hitnu intervenciju kod pacijenta!
      <button type="button" class="btn btn-primary ms-auto" onclick="resolve(${firstData.intervention_id})">Slučaj završen</button>
    </div>
    </div>
                <div class="col-md-4 position-relative">
              <div id="alert" class="p-3">
                <h4 class="mb-3">${firstData.firstname} ${firstData.lastname} <small style="font-size:12px;">(${firstData.pol})</small></h4>
                <span class="mb-2 text-xs">Broj pacijenta: <span class="text-dark font-weight-bold ms-sm-2">${firstData.number}</span></span><br>
                <span class="mb-2 text-xs">Broj staratelja: <span class="text-dark ms-sm-2 font-weight-bold">${firstData.numberGuardian}</span></span><br>
                <span class="mb-2 text-xs">JMBG: <span class="text-dark ms-sm-2 font-weight-bold">${firstData.JMBG}</span></span><br>
                <span class="mb-2 text-xs">Godine: <span class="text-dark ms-sm-2 font-weight-bold">${firstData.age}</span></span><br>
                <span class="mb-2 text-xs">Broj kartona: <span class="text-dark ms-sm-2 font-weight-bold">${firstData.carton_id}</span></span><br>
                <span class="mb-2 text-xs">Adresa: <span class="text-dark ms-sm-2 font-weight-bold">${firstData.address}</span></span>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center mt-4">
                <h5 class="mt-3">Krvni pritisak</h5>
                <h1 class="text-gradient text-primary"> <span id="state2">${firstData.blood_pressure}</span></h1>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4">
              <div class="p-3 text-center mt-4">
                <h5 class="mt-3">Puls</h5>
                <h1 class="text-gradient text-primary"> <span id="state2">${firstData.pulse}</span></h1>
              </div>
            </div>
        `;

          var coords = firstData.coords.split(', '); // Razdvajanje koordinata
          var latitude = parseFloat(coords[0]); // Konvertovanje u broj
          var longitude = parseFloat(coords[1]); // Konvertovanje u broj

          L.Routing.control({
              waypoints: [
                  L.latLng(43.3152, 21.9134),
                  L.latLng(latitude, longitude)
              ]
          }).addTo(map);
          globalv++;
      })
      .catch(error => {
        console.error('Došlo je do greške prilikom preuzimanja podataka:', error);
      });
  }

  setInterval(fetchAndDisplayData, 5000);
  fetchAndDisplayData();

  async function resolve(id)
  {
    await fetch(`https://forexfl.com/princip/api.php?a=resolveSOS`, {
      method: "POST",
      body: JSON.stringify({id: +id})
    });

    document.querySelector("#alert").innerHTML = `<div class="p-3 text-center">
                <h5 class="mt-3">Trenutno nema nijedne aktivne intervencije!</h5>
                  <div id="clock">
                  <h3 id="time"></h3>
                  <h3 style="font-size: 17px; margin-top:-7px;" id="date"></h3>
                </div>`;
  }
</script>



