<h1>Mein Rechner</h1>
<form class="mt-5">
    <div class="form-group">
        <label for="a">Zahl A</label>
        <input type="text" id="a" class="form-control">
    </div>
    <div class="form-group">
        <label for="operator">Operator</label>
        <select id="operator" class="form-control">
            <option value="">Operator wählen</option>
            <option value="+" selected>+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
    </div>
    <div class="form-group">
        <label for="b">Zahl B</label>
        <input type="text" id="b" class="form-control">
    </div>
    <div class="form-group">
        <input type="button" id="submit" value="rechne" class="btn btn-primary">
    </div>
</form>
<script>

    var btn = document.getElementById('submit');
    console.info(btn)

    btn.onclick = function(e) {
        console.info(e)
        var a = document.getElementById('a').value
        var b = document.getElementById('b').value
        var operator = document.getElementById('operator').value
        var h1 = document.querySelector('h1')

        h1.innerHTML = rechner(a, b, operator)
    }
</script>
<?php require '../inc/footer.shtml'; ?>
