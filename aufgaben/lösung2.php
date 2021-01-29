<?php require '../inc/header.shtml'; ?>

<div></div>

<script>
var div = document.querySelector('div'),
    table = document.createElement('table'),
	tr, td, th, key,
	buch = {
		// key: value
		"id": 1,
		"autor": "Umberto Eco",
		"title": "Der Name der Rose",
		"Jahr": 1980,
		"preis": 20.00
	};

    for(key in buch) {
    	tr = document.createElement('tr');
	    th = document.createElement('th');
	    td = document.createElement('td');

	    th.innerText = key.toUpperCase();
        td.innerText = buch[key];

    	tr.appendChild(th);
	    tr.appendChild(td);
	    table.appendChild(tr);
    }

    table.className = "table table-striped";
    div.appendChild(table);
</script>

<?php require '../inc/footer.shtml'; ?>
