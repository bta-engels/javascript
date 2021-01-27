<?php require '../inc/header.shtml'; ?>
<script src="../js/config.js"></script>

<h1 id="temperatur"></h1>
<h3 id="beschreibung"></h3>

<script>
    var city = 'Berlin',
    var url = 'http://api.openweathermap.org/data/2.5/weather?q=' + city + ',de&lang=de&units=metric&APPID='+ OW_API_KEY;
</script>
<?php require '../inc/footer.shtml'; ?>
