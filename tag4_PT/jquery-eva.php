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
        var h1 = document.querySelector('h1')
        // jquery-Syntax; var keyword optional, aber Konvention
        // var $h1 = $('h1');
        // alternativ: $('body').find('h1');
        var h3 = document.querySelector('body .container h3')
        var block3oben = document.querySelector('body .container div.row div.col:last-child p')
        // // jquery-Syntax:
        // $block3oben = $('body .container div.row div.col:last-child p')
        var listheading = document.querySelector('body .container div.row:last-child .col:last-child h5')
        var reiheUnten = document.querySelector('div.row:last-child')
        var ul = reiheUnten.querySelector(".col:last-child ul")
        // // jquery-Syntax:
        // $reiheUnten.find('.col:last-child ul')


        // Ändere die Farbe des dritten Blocks auf Grün mit jquery-Syntax
        $(block3oben).css("color", "#006600");
        // $block3oben.css({color: '#006600'});


        // Ersetze Listenüberschrift mit li-Element onclick und färbe sie rot
        // mit jquery-Syntax
        $("li").click(function() {
            $(listheading).text($(this).text());
            $(listheading).css("color", "red");
        });
    </script>
</body>

</html>