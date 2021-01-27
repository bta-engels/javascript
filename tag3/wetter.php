<?php require '../inc/header.shtml'; ?>
<script src="../js/config.js"></script>

<h1 id="temperatur">Mein Wetter</h1>
<h3 id="beschreibung"></h3>

<script>
var
// Icon URL: "http://openweathermap.org/img/w/" + iconcode + ".png"
    city = 'Berlin',
//    city = 'Havana CU',
		h1 = document.getElementById('temperatur'),
		h3 = document.getElementById('beschreibung'),
		url = 'http://api.openweathermap.org/data/2.5/weather?q=' + city + ',de&lang=de&units=metric&APPID=' + OW_API_KEY;

$.get(url, function (resp) {
	var temperatur  = Math.round(resp.main.temp),
        description = resp.weather[0].description,
		iconcode    = resp.weather[0].icon;

    h1.innerText = temperatur + " °C";
	h3.innerText = description;
	h3.style.backgroundImage = "url('http://openweathermap.org/img/w/" + iconcode + ".png')";
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
