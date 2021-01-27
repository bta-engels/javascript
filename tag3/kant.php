<?php require '../inc/header.shtml'; ?>

<div id="txt">Bitte warten</div>

<script>
    var div = document.getElementById('txt'),
        url = '../data/kant_kurz.txt';
    //$('#txt').load(url);
    // ajax request per GET methode
    $.get(url, function(response) {
    	div.innerHTML = response;
    	//speakText(response);
    });
</script>
<?php require '../inc/footer.shtml'; ?>
