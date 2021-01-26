<?php require '../inc/header.shtml'; ?>

<div id="txt">Mein Text</div>
<hr>
<input type="text" id="inpText">



<script>
    var div = document.getElementById('txt'),
        inp = document.getElementById('inpText');

    // onkeyup = Moment, wenn Taste losgelassen wird
    inp.onkeyup = function(e) {
        var wert = e.target.value;
        // console.info(e.target.value);
        div.innerText = e.target.value;
        console.log(wert.length);
    }
</script>


<?php require '../inc/footer.shtml'; ?>