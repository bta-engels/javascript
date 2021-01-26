<?php require '../inc/header.shtml'; ?>

<h1 id="demo"></h1>
<p id="counter"></p>

<script>
    var counter = 0;
    // Führe die Funktion myTimer alle 1000 ms aus
    var myVar = setInterval(myTimer, 1000);


    function myTimer() {
        if (counter > 5) {
            // stoppe myVar mit clearInterval-Funktion
            clearInterval(myVar);
            // stoppe den Funktionsablauf mit return
            return
        }
        var d = new Date();
        // Rufe lokale Uhrzeit auf
        var t = d.toLocaleTimeString();
        // füge dem html die Werte t und counter hinzu
        document.getElementById("demo").innerHTML = t;
        document.getElementById('counter').innerText = counter
        // Erhöhe bei jedem Funktionsaufruf en counter
        counter++;
    }
</script>

<?php require '../inc/footer.shtml'; ?>