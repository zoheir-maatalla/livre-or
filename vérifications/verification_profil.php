<!-- CODE profil -->

<?php

$requete = "SELECT * FROM utilisateurs WHERE login = '" . $_SESSION['login'] . "'";
$query = mysqli_query($connexion, $requete);
$resultat = mysqli_fetch_assoc($query);

if (isset($_POST['Modifier'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_conf = $_POST['password_conf'];
    $old_password = $_POST['old_password'];
    $modif_log = false;
    $modif_password = false;
    $erreur_log = false;
    $erreur_password = false;
    $erreur_oldpassword = false;

    if (password_verify($_POST['old_password'], $resultat['password'])) {
        if ($login != $resultat['login']) {
            $requete_verif = "SELECT login FROM utilisateurs WHERE login = '$login'";
            $query_verif = mysqli_query($connexion, $requete_verif);
            $resultat_verif = mysqli_fetch_assoc($query_verif);

            if (!empty($resultat_verif)) {
                $erreur_log = true;
            } else {
                $update_login = "UPDATE utilisateurs SET login = '$login' WHERE id = '" . $resultat['id'] . "'";
                $query_login = mysqli_query($connexion, $update_login);
                $_SESSION['login'] = $login;
                $modif_log = true;
            }
        }

        if (!empty($password))
        {
            if ($password == $password_conf) {
                $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
                $update_password = "UPDATE utilisateurs SET password = '$password' WHERE id = '" . $resultat['id'] . "'";
                $query_password = mysqli_query($connexion, $update_password);
                $modif_password = true;
            } else {
                $erreur_password = true;
            }
        }
        
    } 
    else {
        $erreur_oldpassword = true;
    }
}

?>