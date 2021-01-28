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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non enim quaero quid verum, sed quid cuique dicendum sit. Nos
                    commodius agimus. Idem iste, inquam, de voluptate quid sentit? Urgent tamen et nihil remittunt.</p>
            </div>
            <div class="col">
                <h5>Col 2</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non enim quaero quid verum, sed quid cuique dicendum
                    sit. Nos commodius agimus. Idem iste, inquam, de voluptate quid sentit? Urgent tamen et nihil remittunt.</p>
            </div>
            <div class="col">
                <h5>Col 3</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non enim quaero quid verum, sed quid cuique dicendum
                    sit. Nos
                    commodius agimus. Idem iste, inquam, de voluptate quid sentit? Urgent tamen et nihil remittunt.
                    <a href="http://bta-movies-start.loc">BTA-PHP-Projekt</a>
                </p>
            </div>
        </div>
        <hr>
        <h3>2. Reihe</h3>
        <div class="row">
            <div class="col">
                <h5>Col 1</h5>
                <p><b>Lorem ipsum</b> dolor sit amet, consectetur adipiscing elit. Non enim quaero quid verum, sed quid cuique dicendum
                    sit. Nos commodius agimus. Idem iste, inquam, de voluptate quid sentit? Urgent tamen et nihil remittunt.</p>
            </div>
            <div class="col">
                <h5>Col 2 <span></span></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non enim quaero quid verum, sed quid cuique dicendum
                    sit. Nos commodius agimus. Idem iste, inquam, de voluptate quid sentit? Urgent tamen et nihil remittunt.</p>
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
        // Greife auf h3-Element im div der Klasse container des Body zu
        var h3 = document.querySelector('body .container h3');
        // Greife auf p im zweiten div in der ersten Reihe (col:nth-child(2)) zu
        var block3oben = document.querySelector('body .container div.row .col:nth-child(2) p');
        // Greife auf h5 im letzten div in der ersten Reihe (col:last-child) zu
        var titleblock3oben = document.querySelector('body .container div.row .col:last-child h5');
        // Speichere untere Reihe als Objekt
        var reiheUnten = document.querySelector('body .container div.row:last-child');
        // Speichere Listenüberschrift als Objekt
        var listheading = document.querySelector('body .container div.row:last-child .col:last-child h5');
        // Speichere ul-Element als Objekt
        var ul = reiheUnten.querySelector('.col:last-child ul');
        // Speichere erstes h1-Element als Objekt
        var h1 = document.querySelector('h1');


        // Weise dem letzten Listenelement die Farbe Pink zu
        reiheUnten.querySelector('div.col:last-child ul li:last-child').style.color = "pink";

        // Setze das jeweils angeklickte Listenelement als rote Listenüberschrift
        // ul.onclick = function(e) {
        //     listheading.innerText = e.target.innerText;
        //     listheading.style.color = "red";
        // }


        // alternativ mit jquery-Syntax
        $("li").click(function() {
            $(listheading).text($(this).text());
            $(listheading).css("color", "red");
        });


        block3oben.style.color = "#006600";
        titleblock3oben.style.color = "red";

        // event onmouseover: ändere style des h3-Elements (css-Begriffe in camelcase)
        h3.onmouseover = function(e) {
            h3.style.color = "purple";
            h3.style.backgroundColor = "burlywood";
            h3.style.fontFamily = "Courier";
        }

        // event onmouseout stellt Ursprungszustand wieder her
        h3.onmouseout = function(e) {
            // e.target greift auf entsprechendes Element zu
            e.target.style.color = "black";
            h3.style.backgroundColor = "#ffff";
            h3.style.fontFamily = "Segoe UI";
        }
    </script>

</body>

</html>