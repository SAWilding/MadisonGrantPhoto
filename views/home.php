<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madison Grant Photo | Home</title>

    <link rel="stylesheet" href="/MadisonGrantPhoto/styles/styles.css">
    <link rel="stylesheet" href="/MadisonGrantPhoto/styles/large.css">
    <link rel="stylesheet" href="/MadisonGrantPhoto/styles/home.css">
    <link rel="stylesheet" href="/MadisonGrantPhoto/styles/carousel.css">
    <link rel="shortcut icon" href="/MadisonGrantPhoto/public/favicon.ico" type="image/png">

    <script type="module" src="/MadisonGrantPhoto/scripts/index.js"></script>
    <script defer src="/MadisonGrantPhoto/scripts/carousel.js"></script>
</head>

<body>
    <header id="main-header">
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/MadisonGrantPhoto/snippets/header.php"?>
    </header>
    <main>
        <section class="hero">
            <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/MadisonGrantPhoto/snippets/carousel.php"?>
        </section>
        <section class="about">
            <div class="about-grid">
                <img src="/MadisonGrantPhoto/public/home/mg-1.jpg" alt="Photo of Madison" class="about-img">
                <div>
                    <h2 class="style-font meet-mg">meet madison</h2>
                    <p class="about-text">
                        Hey friends! I am a wedding and portrait photographer based in Salt Lake City, Utah. Being able to capture your most special moments makes my heart so happy! 
                        I absolutely love the creativity and friendships that photography brings me. I can't wait to create and capture the best memories with you! 
                    </p>
                    <a href="/MadisonGrantPhoto/controllers/main/?action=about" class="more-btn content-font">MORE ABOUT MADISON</a>
                </div>
            </div>
        </section>
        <section class="testimonials">
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <h2 class="style-font testimonial-name">jayci</h2>
                    <p class="testimonial-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia earum
                        culpa, consequatur aspernatur
                        similique quis? Earum perferendis, voluptatum, optio praesentium nihil pariatur corrupti quidem
                        beatae, labore autem facere voluptates excepturi!</p>
                </div>
                <div class="testimonial-card">
                    <h2 class="style-font testimonial-name">kasia</h2>
                    <p class="testimonial-text">Madison was the best to shoot with! She made being in front of the camera very easy and fun. 
                        She was open and honest about what poses worked and which ones didn't, which made my time and hers much more valuable.
                    </p>
                </div>
                <div class="testimonial-card">
                    <h2 class="style-font testimonial-name">larissa</h2>
                    <div class="overlay">
                        <p class="testimonial-text">I loved my pictures and had a really fun time taking them! Madison make me feel comfortable 
                            and had great ideas for poses. Highly recommend!</p>

                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer id="main-footer">
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/MadisonGrantPhoto/snippets/footer.php"?>

    </footer>
</body>

</html>