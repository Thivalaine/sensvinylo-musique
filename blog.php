<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary Meta Tags -->
    <title>Sensvinylo - Blog | Articles et Nouvelles</title>
    <meta name="title" content="Sensvinylo - Blog | Articles et Nouvelles" />
    <meta name="description" content="Découvrez les derniers articles et nouvelles sur Sensvinylo. Restez informé sur les tendances et les nouveautés dans le monde des vinyles." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://sensvinylo-musique.tech/blog.php" />
    <meta property="og:title" content="Sensvinylo - Blog | Articles et Nouvelles" />
    <meta property="og:description" content="Découvrez les derniers articles et nouvelles sur Sensvinylo. Restez informé sur les tendances et les nouveautés dans le monde des vinyles." />
    <meta property="og:image" content="assets/images/logo.webp" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://sensvinylo-musique.tech/blog.php" />
    <meta property="twitter:title" content="Sensvinylo - Blog | Articles et Nouvelles" />
    <meta property="twitter:description" content="Découvrez les derniers articles et nouvelles sur Sensvinylo. Restez informé sur les tendances et les nouveautés dans le monde des vinyles." />
    <meta property="twitter:image" content="assets/images/logo.webp" />

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Blog",
            "name": "Sensvinylo - Blog | Articles et Nouvelles",
            "description": "Découvrez les derniers articles et nouvelles sur Sensvinylo. Restez informé sur les tendances et les nouveautés dans le monde des vinyles.",
            "url": "https://sensvinylo-musique.tech/blog.php",
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
    <link rel="canonical" href="https://sensvinylo-musique.tech/blog.php">
    <link rel="stylesheet" href="css/index.min.css" />
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
</head>
<!-- https://vinylcollector.store/blogs/news -->
<body class="blog">
    <?php 
        include 'header.php'; 
        require('db/fonctions.php');
        $articles = getArticles();
    ?>
    <main class="blogContainer">
            <aside class="blogSummary">
                <h2>Articles récents</h2>
                <ul class="list">
                    <?php
                        foreach($articles as $article) {
                    ?>
                        <li>
                            <a class="link" href="#<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a>
                        </li>
                    <?php
                        }
                    ?>
                </ul>
            </aside>
            <section class="blogList">
                <h1>Nouveaux articles</h1>
                <?php
                    foreach($articles as $article) {
                ?>
                <article class="article" id="1">
                    <header class="articleHeader">
                        <img class="illustration" src="<?php echo $article['illustration']; ?>" alt="Sensvinylo - <?php echo $article['title']; ?>" />
                    </header>
                    <div class="articleContent">
                        <h2><?php echo $article['title']; ?></h2>
                        <time datetime="<?php echo $article['date']; ?>">Date de publication : <?php echo date('d/m/Y', strtotime($article['date'])); ?></time>
                        <p class="paragraph"><?php echo $article['summary']; ?></p>
                        <a class="link" href="article.php?id=<?php echo $article['id']; ?>">Lire la suite</a>
                    </div>
                </article>
                <?php
                    }
                ?>
            </section>
    </main>
    <?php include 'footer.php'; ?>
    <script type="module" src="js/index.js"></script>
</body>
</html>
