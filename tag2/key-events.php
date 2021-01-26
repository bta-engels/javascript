<?php require '../inc/header.shtml'; ?>

<div id="txt">Mein Text</div>
<hr>
<input type="text" id="inpText">
<script>
	var div = document.getElementById('txt'),
        inp = document.getElementById('inpText');

	inp.onkeyup = function (e) {
		var wert = e.target.value
        div.innerText = wert
        console.log(wert.length)
    }
</script>
<?php require '../inc/footer.shtml'; ?>
