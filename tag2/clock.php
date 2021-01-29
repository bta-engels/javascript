<?php require '../inc/header.html'; ?>

<h1 id="demo"></h1>
<p id="counter"></p>
<script>
    setInterval(myTimer, 1000);

	function myTimer() {
		var d = new Date();
		document.getElementById("demo").innerHTML = d.toLocaleTimeString();
	}
</script>

<?php require '../inc/footer.html'; ?>
