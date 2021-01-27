<?php require '../inc/header.shtml'; ?>
<script src="../js/config.js"></script>

<h1 id="temperatur">Temperatur</h1>
<h3 id="beschreibung">Wetter Beschreibung</h3>

<script>
    var city = 'Berlin',
        // 'http://openweathermap.org/img/w/' + '02d' + '.png',
        // city = 'Havanna CU',
        h1 = document.getElementById('temperatur'),
        h3 = document.getElementById('beschreibung'),
        // Zusammensetzung der URL findet sich in der Dokumentation
        url = 'http://api.openweathermap.org/data/2.5/weather?q=' + city + ',de&lang=de&units=metric&APPID=' + OW_API_KEY;

    // resp liefert json-Objekt
    $.get(url, function(resp) {
        var temperatur = Math.round(resp.main.temp),
            beschreibung = resp.weather[0].description,
            iconcode = resp.weather[0].icon;

        h1.innerText = temperatur + '° Celsius';
        h3.innerText = beschreibung;
        h3.style.backgroundImage = "url('http://openweathermap.org/img/w/" + iconcode + ".png ')";
        console.info(resp);
    });
</script>
<style>
    #beschreibung {
        padding-left: 60px;
        background-position: left;
        background-repeat: no-repeat;
        background-size: auto;
    }
</style>
<?php require '../inc/footer.shtml'; ?>