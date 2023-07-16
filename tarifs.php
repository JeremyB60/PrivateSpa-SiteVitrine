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
    <title>Private SPA - Nos tarifs et comment réserver</title>
    <meta name="description" content="Private SPA - Profitez d’un moment de détente en toute intimité, SAUNA - HAMMAM - JACUZZI 100% PRIVATIF.">
</head>

<body>
    <div class="container-fluid">
        <?php
        include_once "./includes/header.php"
        ?>
        <main>

            <!--NOS TARIFS-->

            <div class="presentation presentationreservation bg-light">
                <h1>Réservation</h1>
                <div class="reservation">
                    <p class="titreReservation">Vous souhaitez réserver un espace privatif chez Private SPA</p><br>
                    <ul>
                        <li>1. Les réservations se font uniquement par téléphone au 06.18.36.37.36</li>
                        <li>2. Un acompte par carte ou via PayPal vous sera demandé par téléphone lors de la
                            réservation.</li>
                        <li>3. Le reste du paiement sera à effectuer sur place par PayPal ou en espèces avant la séance</li><br>.
                        <li class="petit">- Modifications possible jusqu’à 48h avant le rendez-vous.</li>
                        <li class="petit">- Les réservations de groupe mixte ne sont pas acceptées.</li>
                    </ul>
                </div>
                <div class="row grilletarifaire">
                    <h2><b>NOS TARIFS</b></h2>
                    <p>Tarifs en vigueur à partir du 1er avril 2023.</p>
                    <div class="col-12 col-md-6 tarifs">
                        <div class="sousgrille">
                            <h3 class="titreReservation">Tarifs semaine</h3>
                            <span>Du lundi au vendredi 17h</span><br><br>
                            <p>2 heures 2 personnes<br>
                                45€/pers.</p>
                            <p>3 heures 2 personnes<br>
                                65€/pers.</p>
                            <ul>
                                <li>+30€/pers. supplémentaire</li>
                                <li>20€ supplémentaire sur les séances nocturnes à&nbsp;partir&nbsp;de&nbsp;21:30</li>
                                <li>De 2 à 5 personnes maximum.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 tarifs">
                        <div class="sousgrille">
                            <h3 class="titreReservation">Tarifs week-end</h3>
                            <span>A partir de vendredi 17h</span><br><br>
                            <p>2 heures 2 personnes<br>
                                50€/pers.</p>
                            <p>3 heures 2 personnes<br>
                                70€/pers.</p>
                            <ul>
                                <li>+35€/pers. supplémentaire</li>
                                <li>20€ supplémentaire sur les séances nocturnes à&nbsp;partir&nbsp;de&nbsp;21:30</li>
                                <li>De 2 à 5 personnes maximum.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            include_once "./includes/nosplus.php"
            ?>
            <?php
            include_once "./includes/suiveznous.php"
            ?>
        </main>
        <?php
        include_once "./includes/footer.php"
        ?>
    </div>
    <script src="./assets/js/jquery-3.6.1.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>