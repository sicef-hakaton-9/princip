<?php include_once 'header.php' ?>

<section class="pt-3 pb-4" id="count-stats">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 z-index-2 border-radius-xl mt-n10 mx-auto py-3 blur shadow-blur">
          <div class="row" id="alert">
                <div class="p-3 text-center">
                <h5 class="mt-3">Trenutno nema nijedne aktivne intervencije!</h5>
                  <div id="clock">
                  <h3 id="time"></h3>
                  <h3 style="font-size: 17px; margin-top:-7px;" id="date"></h3>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="row">
  <div class="container p-5">
    <div class="col-12 mx-auto">
      <div id="map" style="width: 100%; height: 600px;"></div>
    </div>
  </div>
</section>



<script type="text/javascript">
  
  function updateClock() {
    const now = new Date();
    const timeElement = document.getElementById('time');
    const dateElement = document.getElementById('date');
    
    const hours = now.getHours();
    const minutes = now.getMinutes();
    const seconds = now.getSeconds();
    const day = now.getDate();
    const month = now.getMonth() + 1;
    const year = now.getFullYear();

    const timeString = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
    const dateString = `${day.toString().padStart(2, '0')}.${month.toString().padStart(2, '0')}.${year}`;

    timeElement.textContent = timeString;
    dateElement.textContent = dateString;
}

setInterval(updateClock, 1000);
updateClock();

</script>

<?php include_once 'footer.php' ?>


























</body>

</html>

<?php

?>
