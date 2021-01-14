<!-- header  -->

<?php if (!isset($_SESSION['login'])) : ?>

<li><a href="inscription.php">Inscription</a></li>
<li><a href="livre-or.php">Livre d'or</a></li>
<li><a href="connexion.php">Connexion</a></li>

<?php else : ?>

<li><a href="profil.php">Profil</a></li>
<li><a href="livre-or.php">Livre d'or</a></li>
<li>
    <form action="index.php" method="post">
        <input type="submit" name='deco' value="Deconnexion">
    </form>
    <?php if (isset($_POST['deco'])) {
            session_unset();
            session_destroy();
            header('Location:index.php');
        }
        ?>
</li>

<?php endif; ?>