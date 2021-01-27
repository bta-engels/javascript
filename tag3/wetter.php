<?php require '../inc/header.shtml'; ?>
<script src="../js/config.js"></script>

<h1 id="temperatur">Temperatur</h1>
<h3 id="beschreibung">Wetter Beschreibung</h3>

<script>
var city = 'Berlin',
    url = 'http://api.openweathermap.org/data/2.5/weather?q=' + city + ',de&lang=de&units=metric&APPID=' + OW_API_KEY;

$.get(url, function (resp) {
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
