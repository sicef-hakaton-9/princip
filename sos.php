<?php
require "header.php"
?>
<section class="my-5 py-5 container">
    <div class="row">
        <h3 class="text-center mb-5">Simulacija SOS</h3>
        <div style="display:flex;justify-content: center">
            <button type="button" class="btn bg-gradient-danger" onclick="sendSos()">
                SOS
            </button>
        </div>
    </div>
</section>
 
<script>
    let sosses = [
        {
            patient_id: 5,
            pulse: 50,
            coords: "43.334181, 21.918093",
            blood_pressure: "150/90"
        },
        {
            patient_id: 6,
            pulse: 70,
            coords: "43.316673, 21.878767",
            blood_pressure: "130/90"
        },
        {
            patient_id: 8,
            pulse: 80,
            coords: "43.329661, 21.917048",
            blood_pressure: "140/80"
        }
    ];
 
    async function sendSos()
    {
        await fetch("https://forexfl.com/princip/api.php?a=sos", {
            method: "POST",
            body: JSON.stringify({...sosses[Math.floor(Math.random() * sosses.length)], token: 'K5dP9q2w8GfXtLmVbU7Z'})
        });
    }
</script>
<?php
require "footer.php"
?>