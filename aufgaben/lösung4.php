<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Kurs</title>
    <!-- für bootstrap unterstützung -->
    <link rel="stylesheet" href="/javascript/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/javascript/css/styles.css">
    <script src="/javascript/js/jquery-3.5.1.min.js"></script>
    <script src="/javascript/js/bootstrap/bootstrap.min.js"></script>
    <script src="/javascript/js/scripts.js"></script>
    <!-- bootstrap ende -->
</head>
<body>
<div class="container m-3">
    <h1>Query Selector Übungen</h1>
    <hr>
    <h3>1. Reihe</h3>
    <div class="row">
        <div class="col">
            <h5>Col 1</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non enim quaero quid verum, sed quid cuique
                dicendum sit. Nos
                commodius agimus. Idem iste, inquam, de voluptate quid sentit? Urgent tamen et nihil remittunt.</p>
        </div>
        <div class="col">
            <h5>Col 2</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non enim quaero quid verum, sed quid cuique
                dicendum
                sit. Nos commodius agimus. Idem iste, inquam, de voluptate quid sentit? Urgent tamen et nihil
                remittunt.</p>
        </div>
        <div class="col">
            <h5>Col 3</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non enim quaero quid verum, sed quid cuique
                dicendum
                sit. Nos
                commodius agimus. Idem iste, inquam, de voluptate quid sentit? Urgent tamen et nihil remittunt.
                <a href="http://bta-movie-start.loc">BTA-PHP-Projekt</a>
            </p>
        </div>
    </div>
    <hr>
    <h3>2. Reihe</h3>
    <div class="row">
        <div class="col">
            <h5>Col 1</h5>
            <p><b>Lorem ipsum</b> dolor sit amet, consectetur adipiscing elit. Non enim quaero quid verum, sed quid
                cuique dicendum
                sit. Nos commodius agimus. Idem iste, inquam, de voluptate quid sentit? Urgent tamen et nihil remittunt.
            </p>
        </div>
        <div class="col">
            <h5>Col 2 <span></span></h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non enim quaero quid verum, sed quid cuique
                dicendum
                sit. Nos commodius agimus. Idem iste, inquam, de voluptate quid sentit? Urgent tamen et nihil
                remittunt.</p>
        </div>
        <div class="col">
            <h5>Col 3</h5>
            <ul>
                <li>Paul Meier</li>
                <li>Hans Albert</li>
                <li>Erna Müller</li>
                <li>Heinrich der Große</li>
            </ul>
        </div>
    </div>
</div>
<script>
	var $h1 = $('h1'),
	    $h3 = $('body .container h3'),
	    $block3oben = $('body .container div.row div.col:last-child p'),
	    $reiheUnten = $('div.row:last-child'),
	    $ul = $reiheUnten.find(".col:last-child ul");

	$block3oben.css({color: "#006600"});


	// click event auf liste
	$ul.click(function (e) {
		$(this).prev('h5').text($(e.target).text());
	});

	$('li:last-child').css({color: "red"});

    // function declaration via ES6 (ECMA Script Version 6, Javascript 2015)
    // @see: https://www.w3schools.com/js/js_es6.asp
	var over = (e) => {
        $(e.target).css({color: "red", backgroundColor: "#ff0"});
	}
	var out = (e) => {
		$(e.target).css({color: "black", backgroundColor: "#fff"});
	}
	$h3.hover(over, out);
</script>
</body>
</html>
