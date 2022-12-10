<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Avid">
    <meta name="description" content="About annex cafe">
    <title>About the Annex Cafe</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css 2/style.css">
    <script src="js/main.js" defer></script>
</head>
<body>
<?php include "./includes/header.php" ?>

        
    <section class="hero">
            <figure>
                <img src="./img/junk bigi.jpeg" alt="Annex Delicious" title="Delicious Meat!" width="800"
                    height="667">
                <figcaption class="offscreen">
                    Try this delicious Meat
                </figcaption>
            </figure>
    </section>

    <main class="main">
        <article id="about" class="main__article about">
            <h2>About <abbr title="The Annex Cafe">Annex</abbr></h2>
            <p>
                <abbr title="The Annex Hotel">Annex</abbr> was founded in <time datetime="2022">2022</time>. Our cafe
                was built from the <strong>love of Meat</strong> 🌮🌮🌮. We hope our cafe adds a unique and interesting
                place to our little Kisii town.
            </p>
            <aside class="about__trivia">
                <h3>Annex Trivia</h3>
                <details>
                    <summary>When did Annex first appear in Kisii County?</summary>
                    <p class="about__trivia-answer">
                        Hillary Nyakundi, a Gusii Software Engineer says he passed the idea to his mother as a joke!
                    </p>
                </details>
            </aside>
        </article>
    </main>

<?php include "includes/footer.php" ?>

</body>
</html>