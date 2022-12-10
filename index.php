<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Avid">
    <meta name="description" content="The official website for Annex Cafe">
    <title>Annex Cafe</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css 2/style.css">
    <script src="js/main.js" defer></script>
</head>

<body>
<?php include "./includes/header.php" ?>

    <section class="hero">
        <h2 class="hero__h2">Karibu!</h2>
        <figure>
            <img src="./img/roasted meat.jpeg" alt=" " title="We love tacos!" width="800" height="667">
            <figcaption class="offscreen">
                Fried Meat Java
            </figcaption>
        </figure>
    </section>
    <main class="main">
        <article id="menu" class="main__article menu">
            <h2 class="menu__h2">Our Menu</h2>
            <table class="menu__container">
                <caption class="offscreen"></caption>
                <thead>
                    <tr>
                        <th class="menu__header" scope="col">Annex</th>
                        <th class="menu__header" scope="col">Quantity</th>
                        <th class="menu__header" scope="col">Prices</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="menu__item menu__rm" scope="row" rowspan="3">
                            Roasted Meat vs Ugali
                        </th>
                        <td class="menu__item">1</td>
                        <td class="menu__item">sh.450</td>
                    </tr>
                    <tr>
                        <td class="menu__item">2</td>
                        <td class="menu__item">sh.500</td>
                    </tr>
                    <tr>
                        <td class="menu__item">3</td>
                        <td class="menu__item">sh.200</td>
                    </tr>
                    <tr>
                        <th class="menu__item menu__fm" scope="row" rowspan="3">
                            Fried Meat vs Ugali
                        </th>
                        <td class="menu__item">1</td>
                        <td class="menu__item">sh.300</td>
                    </tr>
                    <tr>
                        <td class="menu__item">2</td>
                        <td class="menu__item">sh250</td>
                    </tr>
                    <tr>
                        <td class="menu__item">3</td>
                        <td class="menu__item">sh.600</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td class="menu__item menu__cs" colspan="3">
                            Chipo Mwitu sh.50
                        </td>
                    </tr>
                </tfoot>
            </table>

            <p class="center">
                <a href="#">Back To Top</a>
            </p>
        </article>
    </main>
    <hr>
<?php include "includes/footer.php" ?>
</body>

</html>