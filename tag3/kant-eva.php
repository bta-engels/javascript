<?php require '../inc/header.shtml'; ?>

<div id="txt">Bitte warten!</div>

<script>
    var text = document.getElementById('txt'),
        url = '../data/kant_kurz.txt';

    // Abkürzung für jquery: $, ruft komplettes Objekt auf
    // Ajax-Funktion get (-> http-Methode GET - kommt vom Webserver selbst)
    // get(url, callback-Funktion(Antwort von URL)) lädt empfangene Daten ins div
    $.get(url, function(response) {
        text.innerHTML = response;
        // Sprachausgabe des Texts
        // speakText(response);
    });

    // alternative Schreibweise mit jquery-Syntax u. Ajax-Request
    // $('#txt').load(url);
</script>

<?php require '../inc/footer.shtml'; ?>