<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary Meta Tags -->
    <title>Sensvinylo - Contactez-nous | Votre source de vinyles</title>
    <meta name="title" content="Sensvinylo - Contactez-nous | Votre source de vinyles" />
    <meta name="description" content="Contactez Sensvinylo pour toute question ou demande concernant notre collection de vinyles. Nous sommes là pour vous aider." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://sensvinylo-musique.tech/contact.php" />
    <meta property="og:title" content="Sensvinylo - Contactez-nous | Votre source de vinyles" />
    <meta property="og:description" content="Contactez Sensvinylo pour toute question ou demande concernant notre collection de vinyles. Nous sommes là pour vous aider." />
    <meta property="og:image" content="assets/images/logo.webp" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://sensvinylo-musique.tech/contact.php" />
    <meta property="twitter:title" content="Sensvinylo - Contactez-nous | Votre source de vinyles" />
    <meta property="twitter:description" content="Contactez Sensvinylo pour toute question ou demande concernant notre collection de vinyles. Nous sommes là pour vous aider." />
    <meta property="twitter:image" content="assets/images/logo.webp" />

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ContactPage",
            "name": "Sensvinylo - Contactez-nous | Votre source de vinyles",
            "description": "Contactez Sensvinylo pour toute question ou demande concernant notre collection de vinyles. Nous sommes là pour vous aider.",
            "url": "https://sensvinylo-musique.tech/contact.php",
            "publisher": {
                "@type": "Organization",
                "name": "Sensvinylo",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://sensvinylo-musique.tech/assets/images/logo.webp"
                }
            }
        }
    </script>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="canonical" href="https://sensvinylo-musique.tech/contact.php">
    <link rel="stylesheet" href="css/index.min.css" />
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
</head>
<body class="contactPage">
<?php include 'header.php'; ?>
<main>
        <section class="contactForm">
            <h1>Contactez Sensvinylo</h1>
            <p>Pour toutes questions, demandes spéciales ou commentaires, n'hésitez pas à nous contacter via le
                formulaire ci-dessous ou à travers nos coordonnées. Nous nous efforcerons de vous répondre dans les plus
                brefs délais.</p>
            <form action="submit_form.php" method="post">
                <div class="groupField">
                    <label for="name">Nom:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="groupField">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="groupField">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="6" required></textarea>
                </div>
                <button type="submit">Envoyer</button>
            </form>
        </section>
        <section class="contactInfo">
            <h2>Informations de Contact Sensvinylo</h2>
            <p><strong>Adresse :</strong> 123 Rue de la Musique, Paris, France</p>
            <p><strong>Téléphone :</strong> +33 1 23 45 67 89</p>
            <p><strong>Email:</strong> contact@sensvinylo.com</p>
        </section>
    </main>
<?php include 'footer.php'; ?>
<script type="module" src="js/index.js"></script>
</body>
</html>
