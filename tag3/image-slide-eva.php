<?php require '../inc/header.shtml'; ?>

<div class="row">
    <img id="image" src="../img/fahrrad.jpg" class="align-self-center m-auto" height="500" alt="Slider" title="Slider">
    <h1></h1>
</div>

<script>
    var counter = 0,
        // Variable für Intervalldauer: 3000 Millisekunden
        delay = 3000,
        h1 = document.querySelector('h1'),
        images = ['femö1.jpg', 'haus_in_strasse.jpg', 'hütte.jpg', 'nebel_steg.jpg', 'venus.jpg', 'ziel.jpg'],
        imgLength = images.length;

    // Funktion mit Parameter; return beendet Funktionsausführung
    // function slide(param = 'test') {
    //     if (param == 'hallo') {
    //         alert('Das war wohl nix!')
    //         return null;
    //     }

    function slide() {
        if (counter === imgLength) {
            // reset counter to start images from beginning
            // counter = 0;
            // stop interval and show Text in <h1>
            clearInterval(interval);
            h1.innerText = "Ende der Show!";
            return;
        }
        var img = document.getElementById('image');
        img.src = "../img/" + images[counter];
        console.info(counter + img.src);
        counter++;

    }
    // setInterval gehört zum window-Objekt; window kann man auch weglassen
    // var interval = window.setInterval(slide, delay);
    var interval = setInterval(slide('hallo'), delay);
</script>
<?php require '../inc/footer.shtml'; ?>