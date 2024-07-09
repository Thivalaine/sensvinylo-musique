<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary Meta Tags -->
    <title>Sensvinylo - Article | Votre histoire</title>
    <meta name="title" content="Sensvinylo - Article | Votre histoire" />
    <meta name="description" content="Découvrez un article passionnant sur Sensvinylo. Explorez les détails et les histoires derrière vos vinyles préférés." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://sensvinylo-musique.tech/article.php" />
    <meta property="og:title" content="Sensvinylo - Article | Votre histoire" />
    <meta property="og:description" content="Découvrez un article passionnant sur Sensvinylo. Explorez les détails et les histoires derrière vos vinyles préférés." />
    <meta property="og:image" content="assets/images/logo.webp" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://sensvinylo-musique.tech/article.php" />
    <meta property="twitter:site" content="@sensvinylo" />
    <meta property="twitter:title" content="Sensvinylo - Article | Votre histoire" />
    <meta property="twitter:description" content="Découvrez un article passionnant sur Sensvinylo. Explorez les détails et les histoires derrière vos vinyles préférés." />
    <meta property="twitter:image" content="assets/images/logo.webp" />

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Article",
            "headline": "Article sur Sensvinylo",
            "datePublished": "2023-09-15",
            "image": "assets/images/logo.webp",
            "author": {
                "@type": "Organization",
                "name": "Sensvinylo"
            },
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
    <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "m6rfvfs0kq");
    </script>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <?php
    $id = $_GET['id'];
    echo '<link rel="canonical" href="https://sensvinylo-musique.tech/article.php?id='.htmlspecialchars($id).'">';
    ?>
    <link rel="stylesheet" href="css/index.min.css" />
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome.min.css" />  
</head>
<body class="article">
    <?php 
        include 'header.php'; 
        require_once 'db/fonctions.php';
    ?>
    <main class="articleContainer">
        <?php
            // Vérifier si l'ID de l'article est présent dans l'URL
            if(isset($_GET['id']) && !empty($_GET['id'])) {
                $article_id = htmlspecialchars($_GET['id']);
                $article = getArticleById($article_id);

                if($article) {
                    ?>
                    <article>
                        <header>
                            <a href="blog.php" class="back">
                                Retour
                            </a>
                            <h1><?php echo $article['title']; ?></h1>
                            <time datetime="<?php echo $article['date']; ?>"><?php echo date('d/m/Y', strtotime($article['date'])); ?></time>
                        </header>
                        <p><?php echo $article['content']; ?></p>
                    </article>
                    <?php
                } else {
                    echo "Aucun article trouvé avec l'ID spécifié.";
                }
            } else {
                // Si l'ID de l'article n'est pas présent dans l'URL
                echo "Aucun ID d'article trouvé dans l'URL.";
            }
        ?>
    </main>
    <?php include 'footer.php'; ?>
    <script type="module" src="js/index.js"></script>
    <script src="js/all.min.js"></script>
</body>
</html>
