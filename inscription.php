<!-- CODE inscription -->

<?php

if (isset($_POST['inscription'])) {
    $login = $_POST["login"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT, array('cost' => 12));
    $connexion = mysqli_connect('localhost','root','','livreor');
    $requete = "SELECT login FROM utilisateurs WHERE login = '$login'";
    $query = mysqli_query($connexion,$requete);
    $resultat = mysqli_fetch_all($query);

    if (!empty($resultat))
    {
        echo "<span class='warning'>Ce login est déjà prit !</span>";
    }
    elseif ($_POST['password'] != $_POST['password_conf'])
    {
        echo "<span class='warning'>/!\ Mot de passe différents /!\\</span>";
    }
    else
    {
        $insert_inscri = "INSERT INTO 'utilisateurs' ('login','password') VALUES ('$login','$password')";
        $query_inscri = mysqli_query($connexion,$insert_inscri);
        header('Location:connexion.php');
    }
    mysqli_close($connexion);

}

?>

<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Inscription</title>
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

            <h1 id="titre"> Inscription </h1>

            <form action="inscription.php" method="POST">

                <article>
                    <label> Login </label>
                    <input type="text" name="login" required />
                </article>

                <article>
                    <label> Mot de passe </label>
                    <input type="password" name="password" required />
                </article>

                <article>
                    <label> Confirmation de mot de passe </label>
                    <input type="password" name="password_conf" required />
                </article>

                <input type="submit" name="inscription" value="Inscription" />

                <?php include 'vérifications/verification_inscription.php' ?>

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