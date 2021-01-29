<?php require '../inc/header.html'; ?>

<h1></h1>
<div class="row">
    <img id="image" src="../img/fahrrad.jpg" class="align-self-center m-auto" height="500" alt="Slider" title="Slider">
</div>

<script>
    var counter = 0,
        delay = 2000,
        h1 = document.querySelector('h1'),
        images = ['see.jpg','vw.jpg','ziel.jpg'],
        anzahlBilder = images.length;

    function slide(param = "test") {
    	if(counter === anzahlBilder) {
    		counter = 0;
            // oder interval stoppen
            //clearInterval(interval);
            //return null;
        }

    	var img = document.getElementById('image');
    	img.src = "../img/" + images[counter];
    	counter++;
    }
    var interval = setInterval(slide, delay);
</script>

<?php require '../inc/footer.html'; ?>

