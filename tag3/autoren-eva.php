<?php require '../inc/header.shtml'; ?>

<h1>Bitte warten</h1>
<ul></ul>

<script>
    var h1 = document.querySelector('h1'),
        ul = document.querySelector('ul'),
        // Zugriff auf Autoren-API aus bta-movies
        url = 'http://bta-movies.loc/api/authors';
    // ajax request per GET methode
    $.get(url, function(response) {
        h1.style.display = 'none';
        // Falls Fehler aufgetreten ist
        if (response.error) {
            alert(response.error)
        } else {
            // alles ist gut gegangen; baue hier meine Liste li zusammen
            var authors = response.data;
            // Baue li-Element
            // firstname, lastname des Autoren darstellen
            // li-Element der ul hinzufügen
            for (item of authors) {
                // Erstelle ein HTML-Element (Parameter muss existierendes html-Tag sein)
                var li = document.createElement('li');
                // Fülle li-Element mit Daten aus Array
                li.innerText = item.firstname + ' ' + item.lastname;
                // Füge der ul das li-Element hinzu
                ul.appendChild(li);
            }

        }
        console.info(response);
    });
</script>
<?php require '../inc/footer.shtml'; ?>