<?php session_start();
if (!isset($_SESSION['login'])) { } else {
    header('Location:index.php');
} ?>
<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Connexion</title>
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


    <section id='form'>

            <h1 id="titre"> Connexion </h1>


            <form action="connexion.php" method="POST">

                <article>
                    <label> Login </label>
                    <input type="text" name="login" required />
                </article>

                <article>
                    <label> Mot de passe </label>
                    <input type="password" name="password" required />
                </article>

                <input type="submit" name="connexion" value="Connexion" />

                <?php include 'vérifications/verification_connexion.php' ?>

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