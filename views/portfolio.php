<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madison Grant Photo | Portfolio</title>

    <link rel="stylesheet" href="/MadisonGrantPhoto/styles/styles.css">
    <link rel="stylesheet" href="/MadisonGrantPhoto/styles/large.css">
    <link rel="stylesheet" href="/MadisonGrantPhoto/styles/portfolio.css">
    <link rel="shortcut icon" href="/MadisonGrantPhoto/public/favicon.ico" type="image/png">

    <script type="module" src="/MadisonGrantPhoto/scripts/index.js"></script>
    <script defer src="/MadisonGrantPhoto/scripts/portfolio.js"></script>
</head>

<body>
    <header id="main-header">
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/MadisonGrantPhoto/snippets/header.php"?>
    </header>
    <main>
        <h1 class="heading">Portfolio</h1>
        <section class="portfolio">
            <?php echo $portfolioList?>
        </section>
    </main>
    <footer id="main-footer">
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/MadisonGrantPhoto/snippets/footer.php"?>
    </footer>
</body>

</html>