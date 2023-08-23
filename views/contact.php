<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madison Grant Photo | Contact</title>

    <link rel="stylesheet" href="/MadisonGrantPhoto/styles/styles.css">
    <link rel="stylesheet" href="/MadisonGrantPhoto/styles/large.css">
    <link rel="stylesheet" href="/MadisonGrantPhoto/styles/contact.css">
    <link rel="shortcut icon" href="/MadisonGrantPhoto/public/favicon.ico" type="image/png">

    <script type="module" src="/MadisonGrantPhoto/scripts/index.js"></script>
</head>

<body>
    <header id="main-header">
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/MadisonGrantPhoto/snippets/header.php"?>
    </header>
    <main>
        <h1 class="heading">Contact</h1>
        <form action="" class="contact-form">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <label for="phone">Phone Number:</label>
            <input type="phone" id="phone" name="phone">
            <label for="message">Message:</label>
            <textarea id="message" name="message"></textarea> 
        </form>
    </main>
    <footer id="main-footer">
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/MadisonGrantPhoto/snippets/footer.php"?>
    </footer>
</body>

</html>