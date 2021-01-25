<?php require '../inc/header.shtml'; ?>
<h1>Let's calculate!</h1>

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
        <!-- Feld ist nicht vom submit-type, da Formular nicht abgeschickt werden soll (kein reload) -->
        <input type="button" id="submit" value="rechne" class="btn btn-primary">
    </div>
</form>

<script>
    var btn = document.getElementById('submit');
    console.info(btn);

    // eventhandler onclick (was soll passieren, wenn geklickt?)
    // vordefinierter Parameter event (e), automatisch gesetzt
    btn.onclick = function(e) {
        // Greife mit JS auf die Formularfelder mittels der id und des Attributs "value" zu
        var a = document.getElementById('a').value;
        var b = document.getElementById('b').value;
        // wandle strings in integer um (type casting)
        // a = parseInt(a);
        // b = parseInt(b);
        var operator = document.getElementById('operator').value;
        var h1 = document.querySelector('h1');
        // var ergebnis = "noch nix";
        // switch (operator) {
        //     case '+':
        //         ergebnis = a + b;
        //         break;
        //     case '-':
        //         ergebnis = a - b;
        //         break;
        //     case '*':
        //         ergebnis = a * b;
        //         break;
        //     case '/':
        //         ergebnis = a / b;
        //         break;
        // }
        var ergebnis = rechner(a, b, operator);
        h1.innerHTML = ergebnis;

    }
</script>
<?php require '../inc/footer.shtml'; ?>