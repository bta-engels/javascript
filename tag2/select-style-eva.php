<?php require '../inc/header.shtml'; ?>

<h1> Helllloooooo </h1>

<div></div>

<script>
    // Definiere Variablen mit Komma getrennnt mit einmaligem var vorne
    var styles = ['default', 'darkPower', 'redYellow', 'blueRed'],
        body = document.querySelector('body'),
        div = document.querySelector('div'),
        select = document.createElement('select'),
        item, option;
    // Weise dem Objekt body die Klasse darkPower zu
    // body.className = "darkPower";


    // Erzeuge eine Option im Drop-down-Menü
    // option = document.createElement('option');
    // option.innerText = "default";
    // option.value = "default";
    // Füge dem select die Option als child hinzu
    // select.appendChild(option);

    // Erzeuge options über loop   
    for (item of styles) {
        option = document.createElement('option');
        option.innerText = item;
        option.value = item;
        select.appendChild(option);

    }
    // Füge dem div oben das select als child hinzu
    div.appendChild(select);

    // setze css class name
    // body.className = styles[1];
    select.onchange = function(e) {
        // console.info(e.target.value);
        body.className = e.target.value;
    }


    // alternative Variante mit eigener Funktion
    // function changeStyle(e) {
    //     body.className = e.target.value;
    // }
    // select.onchange = changeStyle;
</script>




<?php require '../inc/footer.shtml'; ?>