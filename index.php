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
    <title>Private SPA - Spa 100% privatif à Creil près de Paris</title>
    <meta property="og:title" content="Private SPA : Spa privatif proche de Paris">
    <meta property="og:url" content="https://www.privatespa60.com/">
    <meta property="og:image" content="https://privatespa60.com/assets/images/centrespa.webp">
    <meta property="og:type" content="website">
    <link rel="canonical" href="https://www.privatespa60.com/">
    <meta name="description" content="Private SPA - Profitez d’un moment de détente en toute intimité, SAUNA - HAMMAM - JACUZZI 100% PRIVATIF.">
    <link rel="preconnect" href="https://www.google-analytics.com">
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134444356-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-134444356-1');
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "DaySpa",
            "name": "Private SPA",
            "image": "https://privatespa60.com/assets/images/centrespa.webp",
            "url": "https://www.privatespa60.com",
            "telephone": "0618363736",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "373 rue du bois des cerisiers",
                "addressLocality": "Creil",
                "postalCode": "60100",
                "addressCountry": "FR"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 49.2468195,
                "longitude": 2.4638125000000173
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday",
                    "Sunday"
                ],
                "opens": "09:00",
                "closes": "23:00"
            },
            "sameAs": ["https://www.facebook.com/privatespa60", "https://www.instagram.com/privatespa_60", "https://www.youtube.com/watch?v=SMEyTVkLGMI", "https://www.snapchat.com/add/privatespa"]
        }
    </script>
</head>

<body id="pageAccueil">

    <div class="container-fluid">
        <?php
        include_once "./includes/header.php"
        ?>
        <main>

            <!--ACCUEIL-->

            <div class="banniere">
                <h1>L'expérience Private SPA</h1>
            </div>
            <div class="presentation">
                <h2 class="mb-0">Découvrez notre complexe dédié au bien&#8209;être</h2>
                <span>&mdash;&mdash;&mdash;</span>
                <p class="bold mt-1">Private SPA, votre destination bien&#8209;être</p>
                <p>Private SPA propose une expérience unique de bien-être 100%&nbsp;privative.</p>
                <p>Coupez avec votre quotidien et prenez soin&nbsp;de&nbsp;vous.</p>
                <p>Pour ne pas laisser l'occasion de passer un moment inoubliable consultez <a href="./tarifs.php">nos&nbsp;prestations</a>.
                </p><br>
                <a class="btn btn-dark" href="./concept.php">Découvrez le concept Private&nbsp;SPA</a>
            </div>
            <?php
            include_once "./includes/noscentres.php"
            ?>
            <?php
            include_once "./includes/choix.php"
            ?>
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