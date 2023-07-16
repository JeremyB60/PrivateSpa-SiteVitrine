<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./assets/images/logosolo.png">
    <link rel="shortcut icon" type="image/png" href="./assets/images/logosolo.png">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <title>Private SPA - Plan du site</title>
    <meta name="description" content="Private SPA - Profitez d’un moment de détente en toute intimité, SAUNA - HAMMAM - JACUZZI 100% PRIVATIF.">
</head>

<body>
    <div class="container-fluid">
        <?php
        include_once "./includes/header.php"
        ?>
        <main>

            <!-- PLAN DU SITE-->

            <div class="bg-light plandusite">
                <h1>Plan du site</h1>
                <ul>
                    <li>
                        <a href="./index.php">Accueil</a>
                        <ul>
                            <li><a href="./forces.php">Nos forces</a></li>
                        </ul>
                    </li>
                    <li><a href="./concept.php">Notre concept</a></li>
                    <li><a href="./galerie.php">Galerie</a></li>
                    <li><a href="./centres.php">Nos centres</a></li>
                    <li><a href="./tarifs.php">Nos tarifs</a></li>
                    <li><a href="./boncadeau.php">Bon cadeau</a></li>
                    <li><a href="./privatepool.php">Private Pool</a></li>
                    <li><a href="./mentionslegales.php">Mentions légales</a></li>
                    <li><a href="./cgv.php">Conditions Générales de Vente</a></li>
                </ul>
            </div>
        </main>
        <?php
        include_once "./includes/footer.php"
        ?>
    </div>
    <script src="./assets/js/jquery-3.6.1.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>