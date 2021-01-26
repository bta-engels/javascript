<?php require '../inc/header.shtml'; ?>
<h1>Test</h1>

<div></div>

<script>
    var styles = ['default','darkPower','redYellow','blueRed'],
        body = document.querySelector('body'),
        div = document.querySelector('div'),
        // erzeuge eine select element
        select = document.createElement('select'),
        item,option;

    // options über style loop erzeugen
    for(item of styles) {
    	// erzeuge option element
	    option = document.createElement('option');
	    option.innerText = item // anzeige text setzen
	    option.value = item // wert setzen
        // hänge das option element als child ins select element
	    select.appendChild(option)
    }
    // hänge mein select ins leere div element ein
    div.appendChild(select);

    // onchange event für select
    function changeStyle(e) {
	    // setze css class name
        console.info(e.target.value)
	    body.className = e.target.value;
    }
/*
    select.onchange = function (e) {
	    body.className = e.target.value;
    }
 */
    // oder
    select.onchange = changeStyle
</script>
<?php require '../inc/footer.shtml'; ?>
