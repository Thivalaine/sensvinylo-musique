<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary Meta Tags -->
    <title>Sensvinylo - Services offerts | La destination des vinyles</title>
    <meta name="title" content="Sensvinylo - Services offerts | La destination des vinyles" />
    <meta name="description" content="Découvrez les services de Sensvinylo, votre destination pour les vinyles, conçus pour les amateurs et les collectionneurs chevronnés." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://sensvinylo-musique.tech/services.html" />
    <meta property="og:title" content="Sensvinylo - Services offerts | La destination des vinyles" />
    <meta property="og:description" content="Découvrez les services de Sensvinylo, votre destination pour les vinyles, conçus pour les amateurs et les collectionneurs chevronnés." />
    <meta property="og:image" content="assets/images/logo.webp" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://sensvinylo-musique.tech/services.html" />
    <meta property="twitter:title" content="Sensvinylo - Services offerts | La destination des vinyles" />
    <meta property="twitter:description" content="Découvrez les services de Sensvinylo, votre destination pour les vinyles, conçus pour les amateurs et les collectionneurs chevronnés." />
    <meta property="twitter:image" content="assets/images/logo.webp" />

    <script type="application/ld+json">
        [
            {
                "@context": "https://schema.org",
                "@type": "Service",
                "serviceType": "Consultation pour collectionneurs",
                "provider": {
                    "@type": "Organization",
                    "name": "Sensvinylo"
                },
                "availableChannel": {
                    "@type": "ServiceChannel",
                    "serviceUrl": "https://sensvinylo-musique.tech/collection.php"
                }
            },
            {
                "@context": "https://schema.org",
                "@type": "Service",
                "serviceType": "Restauration de vinyles",
                "provider": {
                    "@type": "Organization",
                    "name": "Sensvinylo"
                },
                "availableChannel": {
                    "@type": "ServiceChannel",
                    "serviceUrl": "https://sensvinylo-musique.tech/collection.php"
                }
            },
            {
                "@context": "https://schema.org",
                "@type": "Service",
                "serviceType": "Vente de vinyles exclusifs",
                "provider": {
                    "@type": "Organization",
                    "name": "Sensvinylo"
                },
                "availableChannel": {
                    "@type": "ServiceChannel",
                    "serviceUrl": "https://sensvinylo-musique.tech/collection.php"
                }
            },
            {
                "@context": "https://schema.org",
                "@type": "Service",
                "serviceType": "Événements et écoutes",
                "provider": {
                    "@type": "Organization",
                    "name": "Sensvinylo"
                },
                "availableChannel": {
                    "@type": "ServiceChannel",
                    "serviceUrl": "https://sensvinylo-musique.tech/collection.php"
                }
            }
        ]
    </script>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="canonical" href="https://sensvinylo-musique.tech/collection.php">
    <link rel="stylesheet" href="css/index.min.css" />
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome.min.css" />  
</head>
<body class="collection">
    <?php 
        include 'header.php'; 
        require_once 'db/fonctions.php';
    ?>
    <main class="collectionContainer">
        <header class="collectionHeader">
            <h1>Notre Collection</h1>
        </header>
        <section class="collectionList">
            <?php
                $items = getItemsInCollection();

                foreach ($items as $item) {
                ?>
                    <article class="collectionItem">
                        <img src="<?= $item['illustration'] ?>" alt="Sensvinylo - <?= $item['title'] ?>">
                        <div class="collectionItemDetails">
                            <h2><?= $item['title'] ?></h2>
                            <p><?= $item['price'] ?>$</p>
                            <a href="item.php?id=<?= $item['id'] ?>" class="link">Voir plus</a>
                        </div>
                    </article>
                <?php
                }
            ?>
        </section>
    </main>
    <?php include 'footer.php'; ?>
    <script type="module" src="js/index.js"></script>
    <script src="js/all.min.js"></script>
</body>
</html>

