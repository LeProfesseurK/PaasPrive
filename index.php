<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemple Paas Privé</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    </head>
    <body>
        <img style="float: right;" width="20%" height="5%" src="http://www.insset.u-picardie.fr/images/logo/logoStQuent-INSSET-2016.png">
        <h1>Master CCM2 2001-2019</h1>

        <button type="button" id="dice" onclick="LanceDice()">Lancer un dé</button>

        <div id="resultatAffichage" hidden="hidden">
            <p>Résultat : <span id="resultat"></span></p>
        </div>

        <script>
            function LanceDice() {
                var resultat = Math.floor(Math.random() * Math.floor(100));
                document.getElementById("resultatAffichage").hidden = false;
                document.getElementById("resultat").innerHTML = resultat;
                console.log(resultat);
            }
        </script>

    </body>
</html> 