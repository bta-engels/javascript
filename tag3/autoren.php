<?php require '../inc/header.shtml'; ?>

<h1>Bitte warten</h1>
<ul></ul>

<script>
    var h1 = document.querySelector('h1'),
        ul = document.querySelector('ul'),
        li,
        url = 'http://bta-movies.loc/api/author/0';
    // ajax request per GET methode
    $.get(url, function(response) {
	    console.info(response);
    	h1.style.display = 'none';
    	if(response.error) {
    		// wenn fehler aufgetreten ist
    		alert(response.error)
        } else {
    		// alles ist gut gegangen, baue hier meine liste (li) zusammen
            var authors = response.data;
            // loop über authors array
            // li - elem bauen
            // firstname, lastname vom autor darstellen
            // li - elem dem ul - elem hinzufügen
            if(authors.length > 0) {
	            for(item of authors) {
		            li = document.createElement('li');
		            li.innerText = item.firstname + " " + item.lastname;
		            ul.appendChild(li);
	            }
            }
        }
    });
</script>
<?php require '../inc/footer.shtml'; ?>
