<?php require '../inc/header.shtml'; ?>

<h1>Bitte warten</h1>
<ul></ul>

<script>
    var h1 = document.querySelector('h1'),
        ul = document.querySelector('ul'),
        url = 'http://bta-movies.loc/api/authors';
    // ajax request per GET methode
    $.get(url, function(response) {
    	console.info(response);
    });
</script>
<?php require '../inc/footer.shtml'; ?>
