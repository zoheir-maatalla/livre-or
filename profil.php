<?php

session_start();
if (isset($_SESSION['login'])) { } else {
    header('Location:index.php');
}
$connexion = mysqli_connect('localhost', 'root', '', 'livreor');
include "vérifications/verification_profil.php";
$requete = "SELECT * FROM utilisateurs WHERE login = '" . $_SESSION['login'] . "'";
$query = mysqli_query($connexion, $requete);
$resultat = mysqli_fetch_assoc($query);

mysqli_close($connexion);

?>

<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Profil</title>
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
            <figure><img src='img/profil.png'></figure>
        </aside>

        <section id='form'>

            <h1 id="titre"> Profil </h1>


            <form action="profil.php" method="POST">

                <article>
                    <label> Login </label>
                    <input type="text" name="login" value=<?php echo $resultat['login']; ?> />
                </article>

                <article>
                    <label> Mot de passe actuel </label>
                    <input type="password" name="old_password" required />
                </article>

                <article>
                    <label> Nouveau mot de passe </label>
                    <input type="password" name="password" />
                </article>

                <article>
                    <label> Confirmation du nouveau mot de passe </label>
                    <input type="password" name="password_conf" />
                </article>

                <input type="submit" name="Modifier" value="Modifier" />

                <?php
                include "vérifications/echo_profil.php"

                ?>

            </form>

        </section>

    </main>

    <footer class="hetf">
        <nav>
            <ul>
                <?php include "footer.php" ?>

            </ul>

            <aside>
                <p>Copyright 2019 Coding School | All Rights Reserved | Project by MATAZOHR.</p>
            </aside>

        </nav>
    </footer>

</body>

</html>