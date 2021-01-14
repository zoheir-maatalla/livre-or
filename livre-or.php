<?php session_start(); ?>
<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Livre d'or</title>
    <link rel="stylesheet" href="css/livre-or.css">
</head>

<body id="body_livre">

    <header class="hetf">
        <nav>
            <ul>
                <li><a href="index.php"><img src='img/logo-accueil.png'></a></li>

                <?php include "header.php" ?>
            </ul>
        </nav>
    </header>

    <main id="main_livreor">

        <?php if (isset($_SESSION['login'])) : ?>

            <figure>
                <a href="commentaire.php"><img src='img/logo_comment.png' /></a>
                <figcaption> Nouveau commentaire </figcaption>
            </figure>

            <section class="commentaire">
                <article>
                    <?php include "vérifications/verification_livreor.php"; ?>
                </article>
            </section>

        <?php else : ?>

            <section id="noconnect" class="commentaire">
                <article>
                    <?php include "vérifications/verification_livreor.php"; ?>
                </article>
            </section>

        <?php endif; ?>

    </main>

    <footer class="hetf">
        <nav>
            <ul>
                <?php include "footer.php" ?>

            </ul>

            <aside>
                <p>Copyright 2021 Coding School | All Rights Reserved | Project by MATAZOHR.</p>
            </aside>

        </nav>
    </footer>

</body>

</html>