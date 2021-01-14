<?php session_start(); ?>
<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Espace Commentaires</title>
    <link rel="stylesheet" href="css/livre-or.css">
</head>

<body id="body_form">

    <header class="hetf">
        <nav>
            <ul>
                <li><a href="index.php"><img src='img/logo-accueil.png'></a></li>

                <?php include "header.php" ?>
            </ul>
        </nav>
    </header>

    <main id='main_form'>

    <aside>
            <img src='img/commentaire.png'>
        </aside>

        <section id='form'>

            <h1 id="titre"> Espace commentaire </h1>

            <form action="commentaire.php" method="POST">

                <article>
                    <label> Commentaire </label>
                    <textarea name="commentaire" placeholder="Ecrivez votre commentaire.."></textarea>
                </article>

                <input type="submit" name="validation" value="Valider" />

                <?php include 'vérifications/verification_commentaire.php' ?>

            </form>

        </section>

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