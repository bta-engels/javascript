<?php require '../inc/header.shtml'; ?>

<h1 id="txt">Meine Tabelle</h1>

<script>
    var buch = {
        // key: value
        "id": 1,
        "author": "Umberto Eco",
        "title": "Der Name der Rose",
        "year": 1980,
        "price": 20.00
    };

    var container = document.querySelector('body div');
    var table = document.createElement('table');
    var tableHead = document.createElement('tr');
    var key = document.createElement('th');
    var value = document.createElement('th');
    var tableRow = document.createElement('tr');
    key.innerText = "key";
    value.innerText = "value";
    container.appendChild(table);
    table.appendChild(tableHead);
    tableHead.appendChild(key);
    tableHead.appendChild(value);
    table.className = 'table table-striped';


    for (key in buch) {
        var row = document.createElement('tr');
        var k = document.createElement('td');
        var v = document.createElement('td');
        k.innerText = key;
        v.innerText = buch[key];
        table.appendChild(row)
        row.appendChild(k);
        row.appendChild(v);
    }
</script>

<?php require '../inc/footer.shtml'; ?>