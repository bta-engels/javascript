<?php require '../inc/header.shtml'; ?>
<h1>Test</h1>

<div></div>

<script>
    var styles = ['default','darkPower','redYellow','blueRed']
    var body = document.querySelector('body')
    var div = document.querySelector('div')

    var select = document.createElement('select');
    // options über style loop erzeugen
    var option = document.createElement('option');
    option.innerText = "meine Option"

    select.appendChild(option)
    div.appendChild(select);

</script>
<?php require '../inc/footer.shtml'; ?>
