<!-- footer -->

<?php if (!isset($_SESSION['login'])) : ?>

<li><a href="inscription.php">Inscription</a></li>
<li><a href="livre-or.php">Livre d'or</a></li>
<li><a href="connexion.php">Connexion</a></li>

<?php else : ?>

<li><a href="profil.php">Profil</a></li>
<li><a href="livre-or.php">Livre d'or</a></li>

<?php endif; ?>